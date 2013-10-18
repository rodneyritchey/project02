<?php

require_once ('db_connect.php');

$sql="SELECT * FROM Persons WHERE vote='Daffy'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<div class='result_can'>";
  echo "<img src='../img/daffy01.png' />";
  echo "<h2>Daffy has " .$rowcount. " votes!</h2>";
  echo "</div>";
  // Free result set
  mysqli_free_result($result);
  }
?>