<?php

// Which request method was used to access the page;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //first connect to database
  $host = "localhost";
  $user = "root";
  $db = "zekryate";

  //The connect() / mysqli_connect() function opens a new connection to the MySQL server.
  $conn = mysqli_connect($host, $user, "", $db);
  if ($conn) {
    // echo"Connectd";
  } else {
    echo "not Connected";
    die("not connected");
  }

  $username = $_POST['email'];
  $password = $_POST['password'];

  //The query() / mysqli_query() function performs a query against a database.
  $sql = "select *from users where user = '$username' and password = '$password'";

  $result = mysqli_query($conn, $sql);
  // Fetch a result row as a numeric array and as an associative array 
  // mysqli_num_rows type of fetched data array
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // nuber of rows
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    
    // get login paerson information from database
    $all_user_information = "select * from users where user = '$username' and password = '$password'";
    // get id from database
    // execut query in database
    $get_id_query = mysqli_query($conn, $all_user_information);
    // fetch was executed above
    $get_user_data = mysqli_fetch_assoc($get_id_query);
    // get one single row
    // after get id get all information about user

    // user_id table in database ['id']
    $user_id = $get_user_data['id'];
    // first_name table in database ['first_name']
    $first_name = $get_user_data['first_name'];
    $last_name = $get_user_data['last_name'];
    $location = $get_user_data['location'];
    $Description = $get_user_data['Description'];
    $occupation = $get_user_data['Occupation'];


    // ****** SET USER SESSION **************//
    session_start();
    // at last put all it into session variable
    $_SESSION['user_id'] = $user_id;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['location'] = $location;
    $_SESSION['Description'] = $Description;
    $_SESSION['occupation'] = $occupation;

    // *** set cookies ****////
    // if login ok get last cookes and time
    $last_login_date = date('d-m-Y H:i:s');
    // set a new time and date form last enter for 7 days
    setcookie("DATENEW", $last_login_date, time() + (86400 * 7));  // 86400 = 1 day
    // set username and password cookie and time
    setcookie("username", $username, time() + (86400 * 7));
    setcookie("password", $password, time() + (86400 * 7));

    header("Location: http://localhost:3000/views/index.php");
    exit();
  } else {
    sleep(1);
    echo "<h6 style='color:#8CB1F3; font-size:15px;'> <center>Invalid username or password.<center></h6>";
  }
}
