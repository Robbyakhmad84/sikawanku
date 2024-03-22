<?php
require 'functions.php';

$id = $_GET["id"];

$namakawasan = query("SELECT * FROM kawasan WHERE id_kaw = $id")[0];
$sisaluaskumuhkel = query("SELECT SUM(luas_kumuh_akhir) AS total_kumuh FROM kelurahan WHERE id_kaw = $id");
//memecah nilai arrray ke dalam string
$string = implode(',', $sisaluaskumuhkel[0]);
$show = query("SELECT * FROM kelurahan WHERE id_kaw =$id");
//var_dump($string);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKAWANKU</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo-jatim.png" />
    <!-- datatable jquery -->
    <script defer src="https://code.jquery.com/jquery-3.7.0.js">
    </script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
    </script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
    </script>
    <script defer src="js/script.js">
    </script>
    <!-- load nav/footer bar -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
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
            <!-- Data -->
            <div class="text-center">
                <h1 class="fw-bolder">Detail Kelurahan Kawasan <?= $namakawasan["nama_kaw"] ?></h1>
            </div>
            <div class="card bg-primary text-white">
                <div class="card-body">Sisa Luas Kumuh Total<br> <?= $string ?> Ha</div>
            </div>
            <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-5 col-xl-10">
                        <table id="datatable" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kelurahan</th>
                                    <th>RT Terdeliniasi</th>
                                    <th>Luas Kumuh Awal (Ha)</th>
                                    <th>Nilai Kumuh Awal</th>
                                    <th>Nilai Kumuh Akhir</th>
                                    <th>Pengurangan Kumuh</th>
                                    <th>Luas Kumuh Akhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1;
                                foreach ($show as $row) : ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $row["nama_kel"] ?></td>
                                        <td><?= $row["rt_delineasi"] ?></td>
                                        <td><?= $row["luas_kumuh_awal"] ?></td>
                                        <td><?= $row["nilai_kumuh_awal"] ?></td>
                                        <td><?= $row["nilai_kumuh_akhir"] ?></td>
                                        <td><?= $row["pengurangan_kumuh"] ?></td>
                                        <td><?= $row["luas_kumuh_akhir"] ?></td>
                                        <td><a href="kumuhawal.php?id=<?= $row["id_kel"]; ?>&id_kab=<?= $row["id_kab"]; ?>&id_kaw=<?= $row["id_kaw"]?>"><button class="button" style="vertical-align: middle;"><span>Detail</span></button></a>
                                    </tr>
                                <?php $nomor++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </section>
    <section class="py-5">
        <style>
            .embed-container {
                position: relative;
                padding-bottom: 80%;
                height: 0;
                max-width: 100%;

            }

            .embed-container iframe,
            .embed-container object,
            .embed-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            small {
                position: absolute;
                z-index: 40;
                bottom: 0;
                margin-bottom: -15px;
            }
        </style>
        <div class="container">

            <div class="row gx-0 justify-content-center">
                <div class="col-lg-7">
                    <div class="embed-container">
                        <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Kota Pasuruan" src="//www.arcgis.com/apps/Embed/index.html?webmap=ccd02375b42a44eeb94dc596f1374840&extent=112.8538,-7.6665,112.955,-7.6273&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
        </div>

    </section>

    <!-- footer -->
    <div id="footer-placeholder">
    </div>
    <script>
        $(function() {
            $("#footer-placeholder").load("footer.html");
        });
    </script>
</body>

</html>