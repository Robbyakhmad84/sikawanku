<?php

require 'functions.php';

$id = $_GET["id"];
$id_kab = $_GET["id_kab"];
$id_kaw = $_GET["id_kaw"];
$namakab = query("SELECT * FROM kabupaten WHERE id_kab = $id_kab")[0];
$nama = query("SELECT * FROM kelurahan WHERE id_kel = $id")[0];
$namakaw = query("SELECT * FROM kawasan WHERE id_kaw = $id_kaw")[0];
//var_dump($namakawasan);
$show = query("SELECT * FROM rtrw WHERE id_rtrw = $id")[0];

$aspek1a = number_format($show['aspek_1a'] / $show ['jum_bangunan'],4)*100;
$aspek1b = number_format($show['aspek_1b'] / $show ['luas_verif'],4)*100;
$aspek1c = number_format($show['aspek_1c'] / $show ['jum_bangunan'],4)*100;
$aspek2a = number_format($show['aspek_2a'] / $show ['pjg_jaling'],4)*100;
$aspek2b = number_format($show['aspek_2b'] / $show ['pjg_jaling'],4)*100;
$aspek3a = number_format($show['aspek_3a'] / $show ['jum_kk'],4)*100;
$aspek3b = number_format($show['aspek_3b'] / $show ['jum_kk'],4)*100;
$aspek4a = number_format($show['aspek_4a'] / $show ['luas_verif'],4)*100;
$aspek4b = number_format($show['aspek_4b'] / $show ['pjg_drn'],4)*100;
$aspek4c = number_format($show['aspek_4c'] / $show ['pjg_drn'],4)*100;
$aspek5a = number_format($show['aspek_5a'] / $show ['jum_kk'],4)*100;
$aspek5b = number_format($show['aspek_5b'] / $show ['jum_kk'],4)*100;
$aspek6a = number_format($show['aspek_6a'] / $show ['jum_kk'],4)*100;
$aspek6b = number_format($show['aspek_6b'] / $show ['jum_kk'],4)*100;
$aspek7a = number_format($show['aspek_7a'] / $show ['jum_bangunan'],4)*100;
$aspek7b = number_format($show['aspek_7b'] / $show ['jum_bangunan'],4)*100;

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
    <section class="py-3">
      <div class="container px-5">
        <div class="text-center">
          <h1 class="fw-bolder">Detail RT RW Terdeliniasi</h1>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <table class="table table-bordered table-sm">
                  <tr>
                    <th style="width: 250px;">Wilayah RT/RW</th>
                    <td><?= $nama["detail_rt"] ?></td>
                  </tr>
                  <tr>
                    <th>Provinsi</th>
                    <td>Jawa Timur</td>
                  </tr>
                  <tr>
                    <th>Kabupaten</th>
                    <td><?= $namakab["nama_kab"] ?></td>
                  </tr>
                  <tr>
                    <th>Kawasan</th>
                    <td><?= $namakaw["nama_kaw"] ?></td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td><?= $nama["nama_kel"] ?></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-6">
                <table class="table table-bordered table-sm">
                  <tr>
                    <th style="width: 300px;">Luas Verifikasi (Ha)</th>
                    <td><?= $show["luas_verif"] ?></td>
                  </tr>
                  <tr>
                    <th>Jumlah Bangunan (Unit)</th>
                    <td><?= $show["jum_bangunan"] ?></td>
                  </tr>
                  <tr>
                    <th>Jumlah Penduduk (jiwa)</th>
                    <td><?= $show["jum_penduduk"] ?></td>
                  </tr>
                  <tr>
                    <th>Jumlah KK (kk)</th>
                    <td><?= $show["jum_kk"] ?></td>
                  </tr>
                  <tr>
                    <th>Panjang Jalan Lingkungan Ideal (m)</th>
                    <td><?= $show["pjg_jaling"] ?></td>
                  </tr>
                  <tr>
                    <th>Panjang Drainase Lingkungan Ideal (m)</th>
                    <td><?= $show["pjg_drn"] ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- Data preview section-->
            <section class="py-5" id="datarekap">
              <div class="container px-5">
                <!-- Data -->

                <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
                  <div class="row gx-0 justify-content-center">
                    <div class="col-lg-20 col-xl-20">
                      <table id="datatable" class="table table-striped text-center">
                        <table class="table table-bordered table-sm">
                          <tr class="text-center bg-primary1">
                            <thead>
                              <tr>
                                <th style="width: 200px;">ASPEK</th>
                                <th style="width: 250px;">KRITERIA</th>
                                <th>VOLUME</th>
                                <th>SATUAN</th>
                                <th>PROSEN (%)</th>
                                <th>NILAI</th>
                              </tr>
                              <tr data-id_aspek="1">
                                <th rowspan="3">1. Kondisi Bangunan Gedung</th>
                                <td style="font-weight: 600 !important;">a. Ketidakteraturan Bangunan</td>
                                <td class="text-right">
                                  <?= $show["aspek_1a"] ?></td>
                                <td class="text-center">
                                  Unit </td>
                                <td class="text-center"><?= $aspek1a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="2">
                                <td style="font-weight: 600 !important;">b. Kepadatan Bangunan</td>
                                <td class="text-right">
                                  <?= $show["aspek_1b"] ?></td>
                                <td class="text-center">
                                  Ha </td>
                                <td class="text-center"><?= $aspek1b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="3">
                                <td style="font-weight: 600 !important;">c. Ketidaksesuaian dengan Persy Teknis Bangunan</td>
                                <td class="text-right">
                                  <?= $show["aspek_1c"] ?> </td>
                                <td class="text-center">
                                  Unit </td>
                                <td class="text-center"><?= $aspek1c ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Bangunan Gedung</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                              <tr data-id_aspek="4">
                                <th rowspan="2">2. Kondisi Jalan Lingkungan</th>
                                <td style="font-weight: 600 !important;">a. Cakupan Pelayanan Jalan Lingkungan</td>
                                <td class="text-right">
                                  <?= $show["aspek_2a"] ?></td>
                                <td class="text-center">
                                  Meter </td>
                                <td class="text-center"><?= $aspek2a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="5">
                                <td style="font-weight: 600 !important;">b. Kualitas Permukaan Jalan lingkungan</td>
                                <td class="text-right">
                                  <?= $show["aspek_2b"] ?></td>
                                <td class="text-center">
                                  Meter </td>
                                <td class="text-center"><?= $aspek2b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Jalan Lingkungan</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                              <tr data-id_aspek="6">
                                <th rowspan="2">3. Kondisi Penyediaan Air Minum</th>
                                <td style="font-weight: 600 !important;">a. Ketersediaan Akses Aman Air Minum</td>
                                <td class="text-right">
                                  <?= $show["aspek_3a"] ?></td>
                                <td class="text-center">
                                  KK </td>
                                <td class="text-center"><?= $aspek3a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="7">
                                <td style="font-weight: 600 !important;">b. Tidak terpenuhinya Kebutuhan Air Minum</td>
                                <td class="text-right">
                                  <?= $show["aspek_3b"] ?></td>
                                <td class="text-center">
                                  KK </td>
                                <td class="text-center"><?= $aspek3b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Penyediaan Air Minum</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                              <tr data-id_aspek="8">
                                <th rowspan="3">4. Kondisi Drainase Lingkungan</th>
                                <td style="font-weight: 600 !important;">a. Ketidakmampuan Mengalirkan Limpasan Air</td>
                                <td class="text-right">
                                  <?= $show["aspek_4a"] ?></td>
                                <td class="text-center">
                                  Ha </td>
                                <td class="text-center"><?= $aspek4a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="9">
                                <td style="font-weight: 600 !important;">b. Ketidaktersediaan Drainase</td>
                                <td class="text-right">
                                  <?= $show["aspek_4b"] ?></td>
                                <td class="text-center">
                                  Meter </td>
                                <td class="text-center"><?= $aspek4b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="10">
                                <td style="font-weight: 600 !important;">c. Kualitas Konstruksi Drainase</td>
                                <td class="text-right">
                                  <?= $show["aspek_4c"] ?></td>
                                <td class="text-center">
                                  Meter </td>
                                <td class="text-center"><?= $aspek4c ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Drainase Lingkungan</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                              <tr data-id_aspek="11">
                                <th rowspan="2">5. Kondisi Pengelolaan Air Limbah</th>
                                <td style="font-weight: 600 !important;">a. Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis</td>
                                <td class="text-right">
                                  <?= $show["aspek_5a"] ?></td>
                                <td class="text-center">
                                  KK </td>
                                <td class="text-center"><?= $aspek5a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="12">
                                <td style="font-weight: 600 !important;">b. Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai dengan Persyaratan Teknis</td>
                                <td class="text-right">
                                  <?= $show["aspek_5b"] ?></td>
                                <td class="text-center">
                                  KK </td>
                                <td class="text-center"><?= $aspek5b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Pengelolaan Air Limbah</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                              <tr data-id_aspek="13">
                                <th rowspan="2">6. Kondisi Pengelolaan Persampahan</th>
                                <td style="font-weight: 600 !important;">a. Prasarana dan Sarana Persampahan Tidak Sesuai dengan persyaratan Teknis</td>
                                <td class="text-right">
                                  <?= $show["aspek_6a"] ?></td>
                                <td class="text-center">
                                  KK </td>
                                <td class="text-center"><?= $aspek6a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="14">
                                <td style="font-weight: 600 !important;">b. Sistem Pengelolaan Persampahan yang tidak sesuai Standar Teknis</td>
                                <td class="text-right">
                                  <?= $show["aspek_6b"] ?></td>
                                <td class="text-center">
                                  KK </td>
                                <td class="text-center"><?= $aspek6b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Pengelolaan Persampahan</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                              <tr data-id_aspek="15">
                                <th rowspan="2">7. Kondisi Proteksi Kebakaran</th>
                                <td style="font-weight: 600 !important;">a. Ketidaktersediaan Prasarana Proteksi Kebakaran</td>
                                <td class="text-right">
                                  <?= $show["aspek_7a"] ?></td>
                                <td class="text-center">
                                  Unit </td>
                                <td class="text-center"><?= $aspek7a ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr data-id_aspek="16">
                                <td style="font-weight: 600 !important;">b. Ketidaktersediaan Sarana Proteksi Kebakaran</td>
                                <td class="text-right">
                                  <?= $show["aspek_7b"] ?></td>
                                <td class="text-center">
                                  Unit </td>
                                <td class="text-center"><?= $aspek7b ?></td>
                                <td class="text-center">...</td>
                              </tr>
                              <tr style="background-color: #05fff3;">
                                <th colspan="4">Rata-rata Kondisi Proteksi Kebakaran</th>
                                <th class="text-center" style="background-color: #ffbb05;">...</th>
                                <th></th>
                              </tr>
                            <tfoot class="fw-600 bg-soft-secondary">
                              <tr>
                                <td class="text-center" colspan="2">BATAS AMBANG NILAI TINGKAT KEKUMUHAN</td>
                                <td class="text-right" colspan="2">TOTAL NILAI</td>
                                <td class="text-center" colspan="2">22</td>
                              </tr>
                              <tr>
                                <td class="text-center bg-danger" colspan="2">60 -80 : KUMUH BERAT</td>
                                <td class="text-right" colspan="2" rowspan="2">TINGKAT KEKUMUHAN</td>
                                <td class="text-center" rowspan="2" colspan="2">
                                  KUMUH RINGAN </td>
                              </tr>
                              <tr>
                                <td class="text-center bg-warning" colspan="2">38 - 59 : KUMUH SEDANG</td>
                              </tr>
                              <tr>
                                <td class="text-center" style="background-color: yellow;" colspan="2">16 - 37 KUMUH RINGAN</td>
                                <td class="text-right" colspan="2">RATA2 KEKUMUHAN SEKTORAL</td>
                                <td class="text-center" colspan="2">32.73</td>
                              </tr>
                              <tr>
                                <td class="text-center bg-success" colspan="2">
                                  < 16, DINYATAKAN TIDAK KUMUH</td>
                                <td class="text-right" colspan="2">KONTRIBUSI PENANGANAN</td>
                                <td class="text-center" colspan="2">0</td>
                              </tr>
                            </tfoot>
                        </table>
                    </div>
                    </thead>

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