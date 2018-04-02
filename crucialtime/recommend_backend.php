<?php
require __DIR__ . '/__db_connect.php';

if(isset($_GET['dial'])){

    $style=$_GET['style'];
    $dial=$_GET['dial'];



    $sql = sprintf("SELECT * FROM `product` WHERE `style`= '%s' AND `color`= '%s' ORDER BY RAND() ", $style, $dial);
    $result = $mysqli->query($sql);
//    $row = $result->fetch_assoc();

    $_SESSION['recommend'] = $result->fetch_assoc();
    $_SESSION['recommend']['detail']=nl2br($_SESSION['recommend']['detail']);



    echo json_encode($dial);
}



?>