<?php 

//Model function that adds a user by creating a new auto incremented record

require_once ('db_connect.php');

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$vote_id = $_POST["vote_id"];
//Sets Session with vote_id
require_once ('set_session.php');

//Sets cookie with id user and $vote_id as value
require_once ('set_cookie.php');

$sql="INSERT INTO Persons (FirstName, LastName, vote_id) VALUES ('$firstname','$lastname','$vote_id')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";
mysqli_close($con);
?>