<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'kraxx181818';
$db_name = 'cms';



$mysqli = new mysqli($db_host,$db_user, $db_pass, $db_name);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}