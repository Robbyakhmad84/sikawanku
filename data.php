<?php
require 'functions.php';
$show = query("SELECT * FROM shows");
$sumluasawal = query("SELECT SUM(luasawal) FROM shows");
$sumkumulatif = query("SELECT SUM(kumulatif) FROM shows");
$sumsisakumuh = query("SELECT SUM(sisakumuh) FROM shows");
//var_dump($sumluasawal, $sumkumulatif, $sumsisakumuh);
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
    <section class="py-5">
        <div class="container px-5">
            <!-- Data -->
            <div class="text-center">
                <h1 class="fw-bolder">Rekap Penanganan Kumuh 2023</h1>
                <p class="lead fw-normal text-muted mb-0">Kab/Kota Provinsi Jawa Timur</p>
            </div>
            <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-5 col-xl-10">
                        <table id="datatable" class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Luas Kumuh Awal</th>
                                    <th>Kumulatif sd 2023</th>
                                    <th>Sisa Luasan Kumuh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($show as $row) : ?>
                                    <tr>
                                        <td><?= $row["id"] ?></td>
                                        <td><?= $row["nama"] ?></td>
                                        <td><?= $row["luasawal"] ?></td>
                                        <td><?= $row["kumulatif"] ?></td>
                                        <td><?= $row["sisakumuh"] ?></td>
                                        <td><a href="#"><button>Detail</button></a>
                                            <!-- <a href="update.php?id=<?= $row["id"]; ?>">Update</a> -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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