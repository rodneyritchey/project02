<?php

require_once ('db_connect.php');

$sql="SELECT * FROM Persons WHERE vote='f'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcountf=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
?>