<!DOCTYPE html>
<?php include '../model/about.php'; ?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About-Alzekryat</title>
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="css/About.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-sclae=1.0">

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
          <a href="http://localhost:3000/views/index.php" class="nav-item nav-link">Home</a>
          <a href="http://localhost:3000/views/editPage.php" class="nav-item nav-link">Edit</a>
          <a href="http://localhost:3000/views/About.php" class="nav-item nav-link active">About</a>

        </div>
        <div class="navbar-nav ms-auto">
          <a href="http://localhost:3000/views/About.php" class="nav-item nav-link active">
            <?php echo $first_name . ' ' . $last_name ?>
          </a>
          <a href="http://localhost:3000/views/welcome.php" class="nav-item nav-link">
            Loge-out</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- navbar -->
  <div class="about-section">
    <div class="inner-width">
      <h1>About <?php echo $first_name . ' ' . $last_name ?></h1>
      <div class="border"></div>
      <div class="about-section-row">
        <div class="about-section-col">
          <div class="about">
            <p>
              <?php echo $description; ?>
            </p>
            <a href="https://github.com/3li-Iibrhaim">Read More About<?php echo ' ' . $first_name ?></a>
          </div>
        </div>
        <div class="about-section-col">
          <div class="skills">
            <div class="skill">
              <div class="title"><?php echo $occupation ?></div>
              <div class="progress">
                <div class="progress-bar p1"><span>90%</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="bootstrap/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap/popper.min.js"></script>
  <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</body>

</html>