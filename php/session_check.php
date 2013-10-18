<?php
session_start();
//$_SESSION[vote_id] = 31;

if (isset($_SESSION["vote_id"]))
  echo "Welcome Voter Number ". $_SESSION['vote_id'] . "!";
else
  echo "Welcome Guest!";

?>