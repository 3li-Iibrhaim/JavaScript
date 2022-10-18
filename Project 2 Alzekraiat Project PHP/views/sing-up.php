<!doctype html>
<?php include '../model/sing.php'; ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>singup-Alzekryat</title>
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="css/sing-up.css" rel="stylesheet">
</head>

<body>

  <section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Alzekryate <br />
            <span style="color: hsl(218, 81%, 75%)">Picture for your</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Welcome To Alzekryate Pictuire Website
            This site was create by Developer from SUST in Information Technology Collage
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" name='fname' class="form-control" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" name='lname' class="form-control" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" name='email' class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name='password' class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>


                <!-- location input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4" name='location' class="form-control" />
                  <label class="form-label" for="form3Example4">location</label>
                </div>


                <!-- Occupation input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4" name='occupation' class="form-control" />
                  <label class="form-label" for="form3Example4">Occupation or Jop</label>
                </div>


                <!-- descrip -->
                <div class="form-outline mb-4">
                  <textarea class="form-control" name='description' id="exampleFormControlTextarea1" rows="3"></textarea>
                  <label class="form-label" for="form3Example4">Descripte your self</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block mb-4">
                  Sign up
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