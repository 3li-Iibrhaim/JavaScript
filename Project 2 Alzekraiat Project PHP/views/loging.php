<!doctype html>
<?php include '../model/log.php'; ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login-Alzekryat</title>
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="css/loging.css" rel="stylesheet">
</head>

<body>

  <!-- Section: Design Block -->
  <section class="background-radial-gradient overflow-hidden">

    <form method="post">
      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" method='post'>
        <div class="row gx-lg-5 align-items-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              Alzekryate <br />
              <span style="color: hsl(218, 81%, 75%)">Picture for your</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">

            </p>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
                <form method="post">
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" name='email' class="form-control" value="<?php echo $_COOKIE['username'] ?>" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" name='password' class="form-control" value="<?php echo $_COOKIE['password'] ?>" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked /> -->
                    <label class="form-check-label" for="form2Example33">
                      <?php echo 'Last Login at For This Computer at: ' . $_COOKIE["DATENEW"]; ?>
                    </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-dark btn-block mb-4" name='cookei'>
                    Login
                  </button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Section: Design Block -->
  <!-- END -->
  <script type="text/javascript" src="bootstrap/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap/popper.min.js"></script>
  <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</body>

</html>