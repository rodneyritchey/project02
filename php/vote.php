<?php 

//Model function to add a vote to a database field
require_once ('db_connect.php');

$id = $_COOKIE['user'];
$vote = $_POST["vote"];

$sql = "UPDATE Persons SET vote='$vote' WHERE vote_id=$id";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";

mysqli_close($con);

 ?>