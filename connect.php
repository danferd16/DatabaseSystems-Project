<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecommerceshop";

$connect=mysqli_connect($host, $user, $password, $dbname);

if(!$dbname)
{
    die("Connection failed: " . mysqli_connect_error());
}
else {
  echo "";
}

?>
