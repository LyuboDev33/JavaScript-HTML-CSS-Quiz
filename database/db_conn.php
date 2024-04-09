<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbName = "digital_education";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if(!$conn) {

  echo "There was a problem with the connection! :{";

}
