<?php
session_start();
$_SESSION["newUser"] = "login";
?>

<!doctype html>
<html lang="en">

<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <section class="vh-100" style="background-color: #7CF777;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://bcclienttraining.com/wp-content/uploads/2020/02/online-store-3265497_1280.jpg" alt="login form" class="img-fluid" style="height: 650px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="" method="POST">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Bienvenido a la Tiendita</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <input type="text" name="name1" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Name</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="passw" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <input type="submit" name="entrar" class="btn btn-dark btn-lg btn-block" value="ENTRAR">
                    </div>
                  </form>
                  <?php include "verificar.php"; ?>
                  <!--  -->

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>


</html>