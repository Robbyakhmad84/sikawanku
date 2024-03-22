<?php
// <!-- koneksi ke db -->
$conn = mysqli_connect("localhost", "root", "", "sikawanku");

function query($query)
{
    // variabel scope global spy $conn dalam fungsi = yang diatas
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
    // $conn->close();
}

function update($data)
{
    global $conn;

    $id = $data["id"];

    $luasawal = ($data['luasawal']);
    $kumulatif = ($data['kumulatif']);
    $sisakumuh = $luasawal - $kumulatif;

    $query = "UPDATE shows SET                         
                kumulatif = $kumulatif,
                sisakumuh = $sisakumuh                
                WHERE id = $id";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert ('username sudah terdaftar !')
        </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert ('konfirmasi password tidak sesuai !');
        </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    //cek isi data
    // var_dump($password);die;

    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}
