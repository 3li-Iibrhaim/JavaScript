<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  // echo $_POST['email'];

  $host = "localhost";
  $user = "root";
  $db = "zekryate";
 
  $conn = mysqli_connect($host, $user, "", $db);
  if ($conn){
      // echo"Connectd";
  }
  else{
      echo "not Connected";
      die ("not connected");
  }

  $username = $_POST['email'];  
  $password = $_POST['password'];  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $location = $_POST['location'];
  $occupation = $_POST['occupation'];
  $description = $_POST['description'];

  $sql = "insert into users(first_name, last_name, user, password, location, Description, Occupation	) values('$fname', '$lname', '$username', '$password', '$location', '$description', '$occupation')"; 
    $result = mysqli_query($conn, $sql);   
        if($result){  
            header("Location: http://localhost:3000/views/loging.php"); 
          exit();
        }  
        else{  
            echo "<h5 style='color:white'> Reqester failed....</h5>";  
        }     


}
?>

