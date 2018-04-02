<?php

require __DIR__.'/__db_connect.php';

$page_name='edit_me';

$pass=false;

if(isset($_POST['password'])){

    $password = sha1($_POST['password']);

    $p_sql = sprintf("SELECT * FROM `members` WHERE `id`='%s' and `password`='%s'"
        , intval($_SESSION['user']['id'])
        , $password);

    $p_result = $mysqli->query($p_sql);

    if ($p_result->num_rows == 1) {
        $pass=true;

        $mobile = strip_tags(trim($_POST['mobile']));
        $address=strip_tags(trim($_POST['address']));
        $birthday=strip_tags(trim($_POST['birthday']));
        $nickname = strip_tags(trim($_POST['nickname']));

        $sql = "UPDATE `members` SET 
                `mobile`=?,`address`=?,`birthday`=?,`nickname`=? 
                WHERE `id`=?";

        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param("ssssi",$mobile,$address,$birthday,
                            $nickname,$_SESSION['user']['id']);

        $stmt->execute();

        $msg_code = $stmt->affected_rows;

    }

    if(($pass)){
        if($msg_code==1){
            echo '<div class="alert alert-success">修改成功</div>';
        }else{
            echo '<div class="alert alert-danger">資料未修改</div>';
        }
    }else{
        echo '<div class="alert alert-danger">密碼錯誤</div>';
    }

    if($msg_code==1){
        // 更新 session
        $_SESSION['user']['mobile'] = $mobile;
        $_SESSION['user']['address'] = $address;
        $_SESSION['user']['birthday'] = $birthday;
        $_SESSION['user']['nickname'] = $nickname;
    }
}

?>
<?php include __DIR__.'/html-head.php' ?>
    <style>
        small.warning{
            color:red !important;
            display:none
        }
    </style>

    <div class="container">

        <?php include __DIR__.'/html-navbar.php' ?>

        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">會員註冊</h5>

                    <form method="post" onsubmit="return checkForm()" name="form1">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="" value="<?= $_SESSION['user']['email'] ?>" disabled>
                            <small id="emailWarning" class="form-text text-muted warning">請輸入正確的信箱</small>
                        </div>

                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="" value="">
                            <small id="passWarning" class="form-text text-muted warning">請輸入至少6位數密碼</small>
                        </div>

                        <div class="form-group">
                            <label for="nickname">暱稱</label>
                            <input type="text" class="form-control" name="nickname" id="nickname" placeholder="請輸入暱稱" value="<?= $_SESSION['user']['nickname'] ?>">
                            <small id="nickWarning" class="form-text text-muted warning">請輸入至少兩個字的暱稱</small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="" value="<?= $_SESSION['user']['mobile'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="address">地址</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="" value="<?= $_SESSION['user']['address'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="text" class="form-control datepicker" name="birthday" id="birthday" placeholder="" value="<?= $_SESSION['user']['birthday'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">修改</button>

                    </form>

                </div>
            </div>

        </div>

    </div>

    <script>
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });

        function checkForm(){
            $(".warning").hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var email= document.form1.email.value;
            var password=document.form1.password.value;
            var nickname= document.form1.nickname.value;
            var ispass=true;

            if( !pattern.test(email) ){
                $("#emailWarning").show();
                ispass=false;
            }
            if( password.length<6 ){
                $("#passWarning").show();
                ispass=false;
            }
            if( nickname.length<2 ){
                $("#nickWarning").show();
                ispass=false;
            }

            return ispass;
        }

        /*

        正規表示法
        /[A-Z]{2}\d{8}/統一發票
        /09\d{8}/手機
        /^09\d{8}$/手機(嚴謹)

        */
    </script>


<?php include __DIR__.'/html-foot.php' ?>