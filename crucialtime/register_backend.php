<?php

require __DIR__.'/__db_connect.php';

$page_name='register_backend';


if(isset($_POST['re_email'])) {

    $re_email = strip_tags(trim($_POST['re_email']));
    $re_mobile = strip_tags(trim($_POST['re_mobile']));
    $re_address = strip_tags(trim($_POST['re_address']));
    $re_birthday = strip_tags(trim($_POST['re_birthday']));
    $re_name = strip_tags(trim($_POST['re_name']));

    $re_password = sha1($_POST['re_password']);
    $hash = sha1($re_email . $re_mobile . rand());

    $sql = "INSERT INTO `members`(
      `email`, `password`, `mobile`,
      `address`, `birthday`,`hash`,
      `name`, `create_at`)
      VALUES (?,?,?,?,?,?,?,Now()
    )";

    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("sssssss",
        $re_email, $re_password, $re_mobile,
        $re_address, $re_birthday, $hash, $re_name);

    $stmt->execute();

    $msg_code = $stmt->affected_rows;

    echo json_encode($msg_code, JSON_UNESCAPED_UNICODE);

}