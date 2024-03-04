<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];
//var_dump($id);

//query data nama kab base on id
$namakab = query("SELECT * FROM shows WHERE id = $id")[0];

//contoh ambil data dari array numerik
//var_dump($namakab["luasawal"]);

//cek tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

  //cek apakah data berhsail diubah
  if (update($_POST) > 0) {
    echo "
        <script>
        alert('data berhasil diupdate !');
        document.location.href = 'index.php';
        </script>
        ";
  } else {
    echo "
        <script>
        alert('data gagal diupdate !');
        document.location.href = 'index.php';
        </script>
        ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content />
  <meta name="author" content />
  <title>SIKAWANKU | Update Data</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/logo-jatim.png" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <!-- load nav/footer bar -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body class="d-flex flex-column">
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <div id="nav-placeholder"></div>
    <script>
      $(function() {
        $("#nav-placeholder").load("nav.html");
      });
    </script>
    <!-- Page content-->
    <section class="py-5">
      <div class="container px-5">
        <!-- Login form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
          <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
              <i class="bi bi-person-circle"></i>
            </div>
            <h1 class="fw-bolder">Update Data <?= $namakab["nama"] ?> </h1>

          </div>
          <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <form action="" id="updateForm" method="post">
                <!-- hidden value so user cant change/lock value -->
                <input type="hidden" class="form-control" name="id" value="<?= $namakab["id"] ?>">
                <input type="hidden" name="luasawal" value="<?= $namakab["luasawal"] ?>">

                <div class="form-floating mb-3">
                  <h5>Luas Kumuh Awal : <?= $namakab["luasawal"] ?></h5>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="kumulatif" value="<?= $namakab["kumulatif"] ?>">
                  <label for="kumulatif">Kumulatif sd 2023</label>
                </div>

                <div class="form-floating mb-3">
                  <h5>Sisa Luas Kumuh : <?= $namakab["sisakumuh"] ?></h5>
                </div>

                <!-- Submit Button-->
                <div class="d-grid">
                  <button class="btn btn-primary" id="submitButton" type="submit" name="submit">
                    Update
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer-->
  <div id="footer-placeholder"></div>
  <script>
    $(function() {
      $("#footer-placeholder").load("footer.html");
    });
  </script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>