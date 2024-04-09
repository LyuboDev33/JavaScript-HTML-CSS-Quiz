<?php 

require "../database/db_conn.php";

$data = json_decode(file_get_contents('php://input'), true);

$inputVal = $data['field'];

if($inputVal === ''){ 

    echo json_encode(array('status' => 'emptyField'));

    return;
} else { 



$sql = "SELECT * FROM javascript_html_css WHERE email LIKE '%$inputVal%'";
$query = mysqli_query($conn, $sql);



while ($row = mysqli_fetch_assoc($query)) {
  
    $names[] = $row['names'];
    $email[] = $row['email'];
    $result[] = $row['result'];
    $resultPercentage[] = $row['result_percentage'];
    $timeStamp[] = $row['time_stamp'];

    $response = array(
        'names' => $names,
        'email' => $email,
        'result' => $result,
        'resultPercentage' => $resultPercentage,
        'timeStamp' => $timeStamp
            );

}


echo json_encode($response);


}
