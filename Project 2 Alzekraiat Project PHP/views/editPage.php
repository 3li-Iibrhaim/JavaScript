<!doctype html>
<?php include '../model/edit.php'; ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login-Alzekryat</title>
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="css/editPage.css" rel="stylesheet">

</head>

<body>


  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <img src="images/sust.png" style="height:35px; margin-right:5px">
      <a href="http://localhost:3000/views/index.php" class="navbar-brand "><?php echo $first_name ?></a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="http://localhost:3000/views/index.php" class="nav-item nav-link ">Home</a>
          <a href="http://localhost:3000/views/editPage.php" class="nav-item nav-link active">Edit</a>
          <a href="http://localhost:3000/views/About.php" class="nav-item nav-link">About</a>

        </div>
        <div class="navbar-nav ms-auto">
          <a href="http://localhost:3000/views/About.php" class="nav-item nav-link">
            <?php echo $first_name . ' ' . $last_name ?>
          </a>
          <a href="http://localhost:3000/views/welcome.php" class="nav-item nav-link">Loge-out</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- picture -->
  <div class="container">
    <div class="row text-center">
      <!-- call php funciotn -->
      <?php show_Image(); ?>
      <br><br>
      <hr>

    </div>
  </div>
  <!-- picture -->

  <!-- upload image -->
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="mb-3">
        <input class="form-control form-control-sm  bg-secondary" id="formFileSm" type="file" name='myimage'>
      </div>
      <button type="submit" name="upload" class="btn btn-dark mb-3" onclick="location.reload();">Upload Image</button>
    </div>
  </form>

  <!-- upload image -->

  <!-- END -->
  <script type="text/javascript" src="bootstrap/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap/popper.min.js"></script>
  <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script> -->
</body>


</html>