<?php

// 查詢, 加入項目, 更新項目, 移除項目 session CRUD

if(!isset($_SESSION)){
    session_start();
}

// GET 參數 sid, qty
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;


if(empty($_SESSION['like'])){
    $_SESSION['like'] = [];
    $_SESSION['checkLike_sid'] = [];
}

if(!empty($sid)) {
    if(empty($qty)){
        // 移除項目
        unset($_SESSION['like'][$sid]);
        unset($_SESSION['checkLike_sid'][$sid]);
    } else {
        // 加入項目, 更新項目
        $_SESSION['like'][$sid] = $qty;
        $_SESSION['checkLike_sid'][$sid]=$sid;
    }
}

echo json_encode($_SESSION['like']);














