<?php
// <!-- koneksi ke db -->
$conn = mysqli_connect("localhost", "root", "", "sikaku");

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
    $luasawal = htmlspecialchars($data["luasawal"]);
    $kumulatif = htmlspecialchars($data["kumulatif"]);
    $sisakumuh = htmlspecialchars($data["sisakumuh"]);

    $query = "UPDATE shows SET 
                luasawal = '$luasawal', 
                kumulatif = '$kumulatif', 
                sisakumuh = '$sisakumuh', 
                WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
