<?php

require 'functions.php';
$show = query("SELECT * FROM kabupaten");
$sisaluaskumuh = query("SELECT SUM(sisa_luas_kumuh) AS total_kumuh FROM kabupaten");
//memecah nilai arrray ke dalam string
$string = implode(',',$sisaluaskumuh[0]);
//var_dump($string);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SIKAWANKU</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/logo-jatim.png" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- datatable jquery -->
  <script defer src="https://code.jquery.com/jquery-3.7.0.js">
  </script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
  </script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
  </script>
  <script defer src="js/script.js">
  </script>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <!-- load nav/footer bar -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <!-- slideshow -->
  <script defer src="js/script.js">
  </script>
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!--Navigation bar-->
    <div id="nav-placeholder">
    </div>
    <script>
      $(function() {
        $("#nav-placeholder").load("nav.html");
      });
    </script>
    <!--end of Navigation bar-->
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
          <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="my-5 text-center text-xl-start">
              <h1 class="display-5 fw-bolder text-white mt-2 mb-2">
                SIKAWANKU (Sistem Informasi Kawasan Kumuh)
              </h1>
              <p class="lead fw-normal text-white-50 mb-4">
                Provinsi Jawa Timur
              </p>
              <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#datarekap">Data Kawasan Kumuh</a>
                <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!"
                    >Learn More</a
                  > -->
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
            <div class="slideshow-container">
              <div class="mySlides fade">
                <img class="img-fluid rounded-4 my-5" src="assets/rapat-internal.jpg" style="width:80%">
                <br><br>
                <div class="text">Rapat Koordinasi Persiapan Sinkronisasi Capaian Pengurangan Kumuh Jawa Timur 2023</div>
              </div>
              <div class="mySlides fade">
                <img class="img-fluid rounded-4 my-5" src="assets/rapat-mojokerto.jpg" style="width:80%">
                <br>
                <div class="text">Rapat Perhitungan Pangurangan Kumuh Kab. Mojokerto</div>
              </div>
              <div class="mySlides fade">
                <img class="img-fluid rounded-4 my-5" src="assets/rapat-pasuruan.jpg" style="width:80%">
                <br>
                <div class="text">Rapat Perhitungan Pangurangan Kumuh Kab. Pasuruan</div>
              </div>
              <div style="text-align: center;">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
            <!-- <img class="img-fluid rounded-3 my-5" src="assets/bg-perumahan.jpg" alt="..." /> -->
          </div>
        </div>
      </div>
    </header>
    <!-- Data preview section-->
    <section class="py-5" id="datarekap">
      <div class="container px-5">
        <!-- Data -->
        <div class="text-center">
          <h1 class="fw-bolder">Rekap Penanganan Kumuh 2023</h1>
          <p class="lead fw-normal text-muted mb-0">Kab/Kota Provinsi Jawa Timur</p>
        </div>
        <div class="card bg-primary text-white">
          <div class="card-body">Total Sisa Luas Kumuh <br> <?= $string ?> Ha</div>
        </div>
        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
          <div class="row gx-0 justify-content-center">
            <div class="col-lg-20 col-xl-20">
              <table id="datatable" class="table table-striped text-center table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kabupaten/Kota</th>
                    <th>Nomor SK KUMUH</th>
                    <th>Luas Kumuh Awal</th>
                    <th>Kumulatif Penanganan sd 2023</th>
                    <th>Sisa Luasan Kumuh</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor = 1;
                  foreach ($show as $row) : ?>
                    <tr>
                      <td><?= $nomor ?></td>
                      <td><?= $row["nama_kab"] ?></td>
                      <td><?= $row["no_sk_kumuh"] ?></td>
                      <td><?= $row["luas_kumuh_awal"] ?></td>
                      <td><?= $row["kumulatif"] ?></td>
                      <td><?= $row["sisa_luas_kumuh"] ?></td>
                      <td><a href="detailkab.php?id=<?= $row["id_kab"]; ?>"><button class="button" style="vertical-align: middle;"><span>Detail</span></button></a>
                        <!-- <a href="update.php?id=<?= $row["id"]; ?>"><button class="button" style="vertical-align: middle;"><span>Update</span></button></a> -->
                      </td>
                    </tr>
                  <?php $nomor++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- <div class="text-center">
                <h1 class="fw-bolder">Total Penanganan Kumuh Jatim 2023</h1>
          <table id="datatable" class="table table-striped text-center">
            <thead>
              <tr>
                <th>Luas Kumuh Awal</th>
                <th>Kumulatif sd 2023</th>
                <th>Sisa Luasan Kumuh</th>
              </tr>
            </thead>
            <tbody>
              <td><?= $sumluasawal ?></td>
            </tbody>
          </table>
        </div> -->
      </div>
    </section>
  </main>
  <!-- footer -->
  <div id="footer-placeholder">
  </div>
  <script>
    $(function() {
      $("#footer-placeholder").load("footer.html");
    });
  </script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <!-- <script src="js/scripts.js"></script> -->
</body>

</html>