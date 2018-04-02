<?php
require __DIR__ . '/__db_connect.php';

if( isset($_GET['sid']) ){

    $sid=$_GET['sid'];

    $l_sql = sprintf("SELECT * FROM `product` WHERE `sid`= %s",$sid);
    $l_result=$mysqli->query($l_sql);
    $l_data=$l_result->fetch_assoc();
    $l_data['detail']=nl2br($l_data['detail']);


//    echo $l_data;

    echo json_encode($l_data);

}

?>
