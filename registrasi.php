<?php
require 'functions.php';
if(isset($_POST["register"])){

  if(registrasi($_POST) > 0){
    echo "<script>
    alert ('user baru telah ditambahkan')
    </script>";
  } else
  echo mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content />
    <meta name="author" content />
    <title>SIKAWANKU</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo-jatim.png" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
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
        $(function () {
          $("#nav-placeholder").load("nav.html");
        });
      </script>
      <!-- Page content-->
      <section class="py-5">
        <div class="container px-5">
          <!-- Login form-->
          <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
              <div
                class="feature bg-primary bg-gradient text-white rounded-3 mb-3"
              >
                <i class="bi bi-person-circle"></i>
              </div>
              <h1 class="fw-bolder">LOGIN</h1>
              <p class="lead fw-normal text-muted mb-0">
                Masukkan Username dan Password Anda
              </p>
            </div>
            <div class="row gx-5 justify-content-center">
              <div class="col-lg-8 col-xl-6">
                <form action="" method="post">
                  <ul>
                    <li>
                      <label for="username">Username : </label>
                      <input type="text" name="username" id="username" />
                    </li>
                    <li>
                      <label for="password">Password : </label>
                      <input type="password" name="password" id="password" />
                    </li>
                    <li>
                      <label for="password2">Konfirmasi Password : </label>
                      <input type="password" name="password2" id="password2" />
                    </li>
                    <li>
                      <button type="submit" name="register">Register</button>
                    </li>
                  </ul>
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
      $(function () {
        $("#footer-placeholder").load("footer.html");
      });
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
