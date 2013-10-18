<?php
$mysqli = new mysqli("localhost", "ro961590", "1Action_Hero1", "ro961590");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
?>