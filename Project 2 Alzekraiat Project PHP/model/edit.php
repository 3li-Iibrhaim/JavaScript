<?php
session_start();
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];

$host = "localhost";
$user = "root";
$db = "zekryate";

$conn = mysqli_connect($host, $user, "", $db);
if ($conn) {
  // echo"Connectd";
} else {
  echo "not Connected";
  die("not connected");
}

// **** SHOW IMAGE FOR LOGIN NOW USERS
$user_id = $_SESSION['user_id'];
$rows = mysqli_query($conn, "select * from photos where user_id = $user_id");
// fuction that read aparticular image users
function show_Image(){
  while ($row = mysqli_fetch_array($GLOBALS['rows'])) {
         // image_path table in database ['image_path']
         $image_path = $row['file_name'];
         // date table in database ['date']
         $date = $row['date_time'];
         // name table in database ['name']
         $name = $row['name'];
         $str = 
          "<div class=\"card-dark\" style=\"width: 18rem;\">
        <img src=\"{$image_path}\" style='margin-top: 10px;' class=\"card-img-top\" alt=\"...\">
       <div class=\"card-body\">
        <p class=\"card-text\" style=\"color: #ffff; font-size: 14px;\">Uploaded at : {$date}</p>
        <form method='post'>
        <button type='submit' name= 'delete' value = '{$name}' type=\"button\" class=\"btn btn-danger\">Delete.</button>
        <input type=\"hidden\"name='image_path' value='{$image_path}'>
        </form>
        </div>
       </div>
       ";
         echo $str;
       }
 }

//  *** DELETE THE IMAGE FROM DATA BASE AND FILES
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['delete'])) {

    $name = $_POST['delete'];
    $image_path = $_POST['image_path'];

    // *** Delete by name an file path
    $slq_del = "DELETE FROM photos WHERE name='$name' And file_name ='$image_path'";
    // performs a query against a database.
    $result = mysqli_query($conn, $slq_del);
    if ($result) {
      //delete a file, from directory
      $im_path = 'C:\Users\3\Desktop\project\views\images\\'.$name;
      if (is_file($im_path)) {
        //function deletes a picture from local pc.
        unlink($im_path);
      }
      
      header("Refresh:0");
    } else {
      sleep(1);
      echo "<h6 style='color:#8CB1F3; font-size:15px;'> <center>Deleted Faild<center></h6>";
    }
  }
// *** UPLOAD IMAGE TO DATA BASE AND COPY TO IMAGES FILES ***///

  // uploading file to database
  if (isset($_POST['upload'])) {
    //Fistr get file uploaded
    $myfile = $_FILES['myimage'];
    //  The original name of the file to be uploaded.
    $image_name = $myfile['name'];
    //The temporary filename of the file in which the uploaded file was stored on the server.
    $source_file = $myfile['tmp_name'];

    $destination = 'C:\Users\3\Desktop\project\views\images\\' . $image_name;
    //The copy() function copies a file.
    copy($source_file, $destination);
    // get id from session
    $image_path = "http://localhost:3000/views/images/".$image_name;
    $user_id = $_SESSION['user_id'];
    $sql = "insert into photos(user_id, date_time, file_name, name) values($user_id, now(), '$image_path', '$image_name')";
    mysqli_query($conn, $sql);
    header("Refresh:0");
  }
}
