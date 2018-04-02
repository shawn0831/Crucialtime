<?php

require __DIR__.'/__db_connect.php';

$page_name='login_backend';

if(isset($_POST['login_email'])){

    $login_email = $_POST['login_email'];
    $login_password = sha1($_POST['login_password']);

    $sql = sprintf("SELECT * FROM `members` WHERE `email`='%s' and `password`='%s'"
        , $mysqli->escape_string($login_email)
        , $login_password);

    $result = $mysqli->query($sql);

    $login_msg_code = $result->num_rows;

    if ($login_msg_code == 1) {

        $row = $result->fetch_assoc();
        $_SESSION['user'] = $row;
    }

    echo json_encode($login_msg_code, JSON_UNESCAPED_UNICODE);

}


?>