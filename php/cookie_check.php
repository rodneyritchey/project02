<?php
if (isset($_COOKIE["user"]))
  echo "Welcome Voter Number ". $_COOKIE['user'] . "!";
else
  echo "Welcome Guest!";

?>