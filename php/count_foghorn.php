<?php

require_once ('db_connect.php');

$sql="SELECT * FROM Persons WHERE vote='Foghorn'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<div class='result_can'>";
  echo "<img src='../img/foghorn01.png' />";
  echo "<h2>Foghorn has " .$rowcount. " votes!</h2>";
  echo "</div>";
  // Free result set
  mysqli_free_result($result);
  }
?>