
<?php
    $mysqli=new mysqli('localhost',"root","","crucialTime");
    if($mysqli->connect_error){
        die("ERROR!.{$mysqli->connect_errno}{$mysqli->connect_error}");
    }

    $mysqli->query("SET NAMES utf8");


    if(! isset($_SEESION)){
        session_start();
    }

    error_reporting(E_ALL || ~E_NOTICE);

    ?>