<?php 

require "../database/db_conn.php";  

$data = json_decode(file_get_contents('php://input'), true);

$names = $data['names']; 
$email = $data['email'];
$points = $data['resPoints'];
$percentage = $data['resFin'];

$sql = "INSERT INTO javascript_html_css (names, email, result, result_percentage) 
          VALUES ('$names', '$email', '$points', '$percentage')";
$query = mysqli_query($conn, $sql);

if($query) {

  echo json_encode(array('status' => 'success'));

}