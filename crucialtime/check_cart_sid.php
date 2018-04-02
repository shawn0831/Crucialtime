<?php

if(!isset($_SESSION)){
    session_start();
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

if(isset($_SESSION['checkCart_sid'][$sid])){
    $sid=$sid;
}else{
    $sid=0;
}



echo json_encode($sid);














