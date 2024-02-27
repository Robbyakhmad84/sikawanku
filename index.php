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
                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="data.php">Data Kawasan Kumuh</a>
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
                <div class="text">Rapat Koordinasi Persiapan Sinkronisasi Capaian Pengurangan Kumuh Jawa Timur 2023</div>
              </div>
              <div class="mySlides fade">
                <img class="img-fluid rounded-4 my-5" src="assets/rapat-mojokerto.jpg" style="width:80%">
                <div class="text">Rapat Perhitungan Pangurangan Kumuh Kab. Mojokerto</div>
              </div>
              <div class="mySlides fade">
                <img class="img-fluid rounded-4 my-5" src="assets/rapat-pasuruan.jpg" style="width:80%">
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
    <!-- Blog preview section-->
    <section class="py-5">
      <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
            <div class="text-center">
              <h2 class="fw-bolder">Berita Terkini</h2>
              <!-- <p class="lead fw-normal text-muted mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, unde.
                </p> -->
            </div>
          </div>
        </div>
        <div class="row gx-5">
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
              <img class="card-img-top" src="assets/rapat-internal.jpg" alt="..." />
              <div class="card-body p-4">
                <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                  News
                </div>
                <a class="text-decoration-none link-dark stretched-link" href="#!">
                  <h5 class="card-title mb-3">Rapat Koordinasi Persiapan Sinkronisasi Capaian Pengurangan Kumuh Jawa Timur 2023</h5>
                </a>
                <p class="card-text mb-0">
                  <!-- Some quick example text to build on the card title and make
                  up the bulk of the card's content. -->
                </p>
              </div>
              <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                <div class="d-flex align-items-end justify-content-between">
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                    <div class="small">
                      <div class="fw-bold">Admin</div>
                      <div class="text-muted">
                        <!-- March 12, 2023 &middot; -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
              <img class="card-img-top" src="assets/rapat-pasuruan.jpg" alt="..." />
              <div class="card-body p-4">
                <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                  News
                </div>
                <a class="text-decoration-none link-dark stretched-link" href="#!">
                  <h5 class="card-title mb-3">Rapat Perhitungan Pengurangan Kumuh Kab. Pasuruan</h5>
                </a>
                <p class="card-text mb-0">
                  <!-- This text is a bit longer to illustrate the adaptive height
                  of each card. Some quick example text to build on the card
                  title and make up the bulk of the card's content. -->
                </p>
              </div>
              <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                <div class="d-flex align-items-end justify-content-between">
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                    <div class="small">
                      <div class="fw-bold">Admin</div>
                      <div class="text-muted">
                        <!-- March 23, 2023 &middot; -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
              <img class="card-img-top" src="assets/rapat-mojokerto.jpg" alt="..." />
              <div class="card-body p-4">
                <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                  News
                </div>
                <a class="text-decoration-none link-dark stretched-link" href="#!">
                  <h5 class="card-title mb-3">
                    Rapat Perhitungan Pengurangan Kumuh Kab. Mojokerto
                  </h5>
                </a>
                <p class="card-text mb-0">
                  <!-- Some more quick example text to build on the card title and
                  make up the bulk of the card's content. -->
                </p>
              </div>
              <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                <div class="d-flex align-items-end justify-content-between">
                  <div class="d-flex align-items-center">
                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                    <div class="small">
                      <div class="fw-bold">Admin</div>
                      <div class="text-muted">
                        <!-- April 2, 2023 &middot; -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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