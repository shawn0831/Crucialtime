<!---------------------------login---------------------------------->
<?php

require __DIR__.'/__db_connect.php';

$page_name='login';

//$logined=false;
//
//if(isset($_POST['login_email'])){
//
//    $login_email = $_POST['login_email'];
//    $login_password = sha1($_POST['login_password']);
//
//    $sql = sprintf("SELECT * FROM `members` WHERE `email`='%s' and `password`='%s'"
//        , $mysqli->escape_string($login_email)
//        , $login_password);
//
//    $result = $mysqli->query($sql);
//
//    if ($result->num_rows == 1) {
//        $logined = true;
//
//        $row = $result->fetch_assoc();
//        $_SESSION['user'] = $row;
//    }
//
//
//
//}


?>

<!---------------------------register---------------------------------->
<!---->
<?php

$re_email = '';
$re_mobile = '';
$re_address = '';
$re_birthday = '';
$re_name = '';

?>



<?php include __DIR__.'/html-head.php' ?>

<?php include __DIR__.'/html-navbar.php' ?>
    <style>
        .wrap{
            background:url(../imgs/background1.png) no-repeat;
            background-size:cover;

            padding-right:50px;
            padding-bottom:30px;

            overflow:hidden;
        }
        button{
            border:2px solid #9f7a49;
            margin-left:75%;

        }
        h5{
            margin-bottom:40px!important;
        }
        .form-group{
            margin-bottom:20px;
        }
        label{
            margin-right:10px;
        }
        .login{
            position:relative;
            width:290px;
            height:200px;
            color:#fff;

            border-right:1px solid #9F7A49;
            padding-right:50px;
            float:left;
        }
        .login input{
            float:right;
            background: #09141b;
            border:1px solid #9f7a49;
            color:#fff;
            border-radius:5px;
        }

        .register{
            position:relative;
            width:290px;
            height:400px;
            color:#fff;

            padding-left:50px;
            float:left;

        }
        .register input{
            float:right;
            background: #09141b;
            border:1px solid #9f7a49;
            color:#fff;
            border-radius:5px;
        }

        .helf-container{
            /*width:560px;*/
            float:right;
            margin:10vh 5vw 10vh 0;
        }


        small.warning{
            color:red !important;
            display:none;
        }
        .notice{
            position:absolute;
            bottom:0px;

            width:100%;
            /*text-align:center;*/
            color:red;
        }
        .notice2{
             position:absolute;
             bottom:0px;

             width:100%;
             /*text-align:center;*/
             color:red;
         }
        .login button{
            background:none;
            color:#fff;
            border-radius:10px;
            padding:1px 7px;
        }
        .register button{
            background:none;
            color:#fff;
            border-radius:10px;
            padding:3px 10px;
        }

        @media screen and (max-width:450px){

            .wrap{
                background: #000c19;
                padding-bottom:40px;
                height:auto;
                padding:0;

                width:414px;
                overflow:hidden;
            }
            .helf-container{
                margin:9vh 20vw 5vh 23vw;
                padding-bottom:110px;
            }
            .login{
                width:230px;
                border-right:0px solid #9F7A49;
                padding-right:0px;
                margin-bottom:30px;
            }
            .register{
                margin-top:55px;
                width:230px;
                padding-left:0px;
            }

            .login input{
                width:100%;
                float:left;
                margin-bottom:10px;
            }
            .register input{
                width:100%;
                float:left;
                margin-bottom:10px;
            }
            .notice{
                position:absolute;
                bottom:-35px;

                width:100%;
                /*text-align:center;*/
                color:red;
            }
            .notice2{
                position:absolute;
                bottom:-108px;

                width:100%;
                /*text-align:center;*/
                color:red;
            }
            button{
                margin-top:0px;
            }
        }
        .clear{
            clear:both;
        }
    </style>

    <div class="wrap">

                <div class="helf-container">

                    <div class="login">

                            <h5 class="card-title">會員登入</h5>

                            <form method="post" onsubmit="return login_checkForm()" name="login_form">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="" name="login_email" id="login_email" placeholder="" value="">
                                    <br>
                                    <small id="login_emailWarning" class="form-text text-muted warning">請輸入正確的信箱</small>
                                </div>

                                <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input type="password" class="" name="login_password" id="login_password" placeholder="" value="">
                                    <br>
                                    <small id="login_passWarning" class="form-text text-muted warning">請輸入至少6位數密碼</small>
                                </div>

                                <input type="hidden" name="redirect" value="<?=$_SERVER["HTTP_REFERER"]?>">

<!--                                --><?php //if(!$logined):?>
                                <button type="submit" class="login_submit">登入</button>
<!--                                --><?php //endif ?>
                            </form>

                        <div class="notice" id="notice" role="alert"></div>

                    </div>

        <!------------------------register-------------------------->

                    <div class="register">

                            <h5 class="card-title">會員註冊</h5>

                            <form method="post" onsubmit="return re_checkForm()" name="re_form">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="" name="re_email" id="re_email" placeholder="" value="<?= $re_email ?>">
                                    <br>
                                    <small id="re_emailWarning" class="form-text text-muted warning">請輸入正確的信箱</small>
                                </div>

                                <div class="form-group">
                                    <label for="password">密碼</label>
                                    <input type="password" class="" name="re_password" id="re_password" placeholder="" value="">
                                    <br>
                                    <small id="re_passWarning" class="form-text text-muted warning">請輸入至少6位數密碼</small>
                                </div>

                                <div class="form-group">
                                    <label for="mobile">手機</label>
                                    <input type="text" class="" name="re_mobile" id="re_mobile" placeholder="" value="<?= $re_mobile ?>">
                                </div>

                                <div class="form-group">
                                    <label for="address">地址</label>
                                    <input type="text" class="" name="re_address" id="re_address" placeholder="" value="<?= $re_address ?>">
                                </div>
                                <div class="form-group">
                                    <label for="birthday">生日</label>
                                    <input type="text" class="datepicker" id="datepicker" data-provide="datepicker" name="re_birthday" id="re_birthday" placeholder="" value="<?= $re_birthday ?>">
                                </div>

                                <div class="form-group">
                                    <label for="name">姓名</label>
                                    <input type="text" class="" name="re_name" id="re_name" placeholder="" value="<?= $re_name ?>">
                                    <br>
                                    <small id="re_nameWarning" class="form-text text-muted warning">請輸入至少兩個字的姓名</small>
                                </div>

                                <?php if(!isset($msg_code) or $msg_code != 1): ?>

                                    <button type="submit" class="">註冊</button>

                                <?php endif; ?>

                            </form>

                        <div class="notice2" id="notice2" role="alert"></div>

                    </div>

                    <div class="clear">

                    </div>

                </div>

        <div style="clear:both"></div>
    </div>

    <script>
        function login_checkForm(){
            $(".warning").hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var login_email= document.login_form.login_email.value;
            var login_password=document.login_form.login_password.value;
            var login_ispass=true;

            if( !pattern.test(login_email) ){
                $("#login_emailWarning").show();
                login_ispass=false;
            }
            if( login_password.length<6 ){
                $("#login_passWarning").show();
                login_ispass=false;
            }

            if(login_ispass){
                $.post("login_backend.php",$(document.login_form).serialize(),function(data){
                    console.log(data);

                    switch (data){
                        case 1:
                            $("#notice").html("登入成功! 頁面將跳轉");
                            setTimeout(function(){
                                location.href = '<?=$_SERVER["HTTP_REFERER"]?>';
                            }, 3000);

                            break;

                        default:
                            $("#notice").html("登入失敗! 帳號密碼錯誤");
                            break;
                    }

                },'json');
            }

            return false;
        }

<!--        --><?php //if( isset($_POST['login_email']) ): ?>
<!--            --><?php //if($logined): ?>
//                setTimeout(function(){
//                    location.href = '<?//= $_POST["redirect"] ?>//';
//                }, 3000);
//
//                $("#notice").html("完成登入! 頁面將跳轉");
//            <?php //else: ?>
//                $("#notice").html("帳號密碼錯誤!");
//            <?php //endif; ?>
<!--        --><?php //endif; ?>


<!--  --------------------------------register------------------------------  -->

        // $(".datepicker").datepicker({
        //     dateFormat: "yy-mm-dd"
        //     startYear: '-3y',
        //     changeMonth: true,
        //     changeYear: true
        // });

        // $('#datepicker').DatePicker({
        //     flat: true,
        //     date: '2008-07-31',
        //     current: '2008-07-31',
        //     calendars: 1,
        //     starts: 1
        // });

        function re_checkForm(){
            $(".warning").hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var re_email= document.re_form.re_email.value;
            var re_password=document.re_form.re_password.value;
            var re_name= document.re_form.re_name.value;
            var re_ispass=true;

            if( !pattern.test(re_email) ){
                $("#re_emailWarning").show();
                re_ispass=false;
            }
            if( re_password.length<6 ){
                $("#re_passWarning").show();
                re_ispass=false;
            }
            if( re_name.length<2 ){
                $("#re_nameWarning").show();
                re_ispass=false;
            }

            if(re_ispass){
                $.post("register_backend.php",$(document.re_form).serialize(),function(data){
                    console.log(data);

                    switch (data){
                        case 1:
                            $("#notice2").html("註冊成功! 請登入會員");
                            $('.register input').val('');

                            break;

                        case-1:
                            $("#notice2").html("註冊失敗! email已被註冊");
                            break;

                        default:
                            $("#notice2").html("註冊失敗! 請稍後再試");
                            break;
                    }

                },'json');
            }

            return false;
        }




    </script>


<?php include __DIR__.'/html-foot.php' ?>