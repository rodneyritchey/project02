<?php 
	session_start();

	require_once('db_connect.php');

	$id=$_COOKIE['user'];

	//echo $sesh_id;

	$result = mysqli_query($con,"SELECT vote FROM Persons WHERE vote_id=$id");

	
while($row = mysqli_fetch_array($result))
  {
   echo "<h1>Thank You for voting, Voter Number " .$_COOKIE['user']. "!</h1>";
   echo "<h1>You voted for " .$row['vote']. "!</h1>";
   
  }
 ?>