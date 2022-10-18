<?php
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

// *** show who user whas in by session***///
session_start();
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];


// ****DISPLAY  ALL IMAGE AND COMMENT FORM DATABASES BY WHILE LOOP **////
function show_image()
{
  //The query() / mysqli_query() function performs a query against a database.
  $rows = mysqli_query($GLOBALS['conn'], "select * from photos");
 
  // *** first get all images from database by while loop***//

  // 	Returns an array of strings that corresponds to the fetched row. NULL if there are no more rows in result-set
  while ($row = mysqli_fetch_array($rows)) {
     // image_path table in database ['image_path']
    $image_path = $row['file_name'];
    // id table in database ['id']
    $id = $row['id'];
    // date table in database ['date']
    $date = $row['date_time'];
    // user_id table in database ['user_id']
    $user_id = $row['user_id'];
    // first user who create a photot from database
    $users = mysqli_query($GLOBALS['conn'], "select first_name, last_name from users where id = $user_id");
    // Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
    $full_user_name = mysqli_fetch_assoc($users);

    $first_name_user = $full_user_name['first_name'];
    $last_name_user = $full_user_name['last_name'];


    // ************ get all Comments, Name, Date ***************//

    // empty string that i can get all comment from it
    $all_comments = "";

    $all_comment_query = mysqli_query($GLOBALS['conn'], "select * from comments where photo_id = {$id}");
    // while fore loop and fetch all comment

    while ($row = mysqli_fetch_array($all_comment_query)) {
      // comment table in database ['commetn']
      $comment = $row['Comment'];
      // name table in database ['name']
      $name = $row['user'];
      // date_time table in database ['date_time']
      $date_time = $row['date_time'];

      // string variable for get comment and print it
      $get_one_comment = "
      <div>
        <h5 style=\"display: inline; font-size: 19px; color: #427DB1; font-family:Copperplate font-weight: bold;\">$name</h5>
        <p style=\"display: inline;  font-size: 11px;color: #8D8B89;\">$date_time</p>
        <p style=\"font-size: 15px; font-family: Arial, Helvetica, sans-serif;\">$comment</p>
      </div>
  ";

      // concatinate the string
      $all_comments = $all_comments . $get_one_comment;
    }

    // finaly print the post
    $the_post = "
  <div class=\"col-xs-12 col-sm-6 col-md-4\">
    <!-- Card -->
    <div class=\"card mb-4\">

      <!--Card image-->
      <div class=\"view overlay\">
        <img class=\"card-img-top\" src=\"$image_path\" alt=\"Card image cap\">
        <a href=\"#!\">
          <div class=\"mask rgba-white-slight\"></div>
        </a>
      </div>

      <!--Card content-->
      <div class=\"card-body\">
      $all_comments
        <form class=\"form-inline\" method='post'>
          <input type=\"hidden\"name='image_path' value='{$image_path}'>
          <input class=\"form-control form-control-sm\" type=\"text\" name='now_comment' value='' style=\"width: 150px; height:1px;\" placeholder=\"add comment\">
        </form>
        <p class=\"card-text\"><small class=\"text-muted\">$first_name_user $last_name_user <i class=\"fas fa-calendar-alt\"></i>${date}</small></p>

      </div>

    </div>
    <!-- Card -->
  </div>
";
    // at last print html data above
    echo $the_post;
  }
}

// ******** UPLOAD IMAGE COMMENT **********  😃hi
 //Which request method was used to access the page
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //Check whether a variable is empty. Also check whether the variable is set/declared:

  // get a comment
  if (isset($_POST['now_comment'])) {
    $now_comment = $_POST['now_comment'];

    // get a path from hidding value 
    if (isset($_POST['image_path'])) {
      $image_path = $_POST['image_path'];
    }

    // first get all comment of particular image from database
    $query_get_id = mysqli_query($conn, "select id from photos where file_name = '{$image_path}'");
    // Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
    $photo_id = mysqli_fetch_assoc($query_get_id);
    // id table in database ['id]
    $photo_id = $photo_id['id'];
    // then add news comment from database
    $slq_coment = "insert into comments(photo_id, user, date_time,	Comment) values($photo_id, '$first_name $last_name', now() , '{$now_comment}');";
    $result = mysqli_query($conn, $slq_coment);
    if ($result) {
      //refresh page if is ok
      header("Refresh:0");
    } else {
      sleep(1);
      echo "<h6 style='color:#8CB1F3; font-size:15px;'> <center>faild comment<center></h6>";
    }
  }
}
