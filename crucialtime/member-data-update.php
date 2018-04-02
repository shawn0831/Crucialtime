<?php
require __DIR__ . '/__db_connect.php';

$page_name='member-data-update';

if(!isset($_SESSION['user'])){
    header('Refresh:0;url=login.php');
};

if(isset($_POST['password'])) {

    $password = sha1($_POST['password']);

    $p_sql = sprintf("SELECT * FROM `members` WHERE `id`='%s' and `password`='%s'"
        , intval($_SESSION['user']['id'])
        , $password);

    $p_result = $mysqli->query($p_sql);


    if ($p_result->num_rows == 1) {

        $name = strip_tags(trim($_POST['name']));
        $email = strip_tags(trim($_POST['email']));
        $mobile = strip_tags(trim($_POST['mobile']));
        $address = strip_tags(trim($_POST['address']));
        $birthday = strip_tags(trim($_POST['birthday']));

        if(!empty($_POST['new_password'])) {

            $new_password = sha1($_POST['new_password']);

            $sql = "UPDATE `members` SET
                `name`=?,`email`=?,`mobile`=?,`address`=?,`birthday`=?,`password`=?
                WHERE `id`=?";

            $stmt = $mysqli->prepare($sql);

            $stmt->bind_param("ssssssi", $name, $email, $mobile, $address, $birthday,
                $new_password, $_SESSION['user']['id']);

            $stmt->execute();
        }else{
            $sql = "UPDATE `members` SET
                `name`=?,`email`=?,`mobile`=?,`address`=?,`birthday`=?
                WHERE `id`=?";

            $stmt = $mysqli->prepare($sql);

            $stmt->bind_param("sssssi", $name, $email, $mobile, $address, $birthday,
                $_SESSION['user']['id']);

            $stmt->execute();
        }

        $msg_code = $stmt->affected_rows;


        if ($msg_code == 1) {
            echo '<div class="alert alert-success">修改成功<span class="close">x</span></div>';
        } else {
            echo '<div class="alert alert-danger">資料未修改<span class="close">x</span></div>';
        }

        if ($msg_code == 1) {
            // 更新 session
            $_SESSION['user']['name'] = $name;
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['mobile'] = $mobile;
            $_SESSION['user']['address'] = $address;
            $_SESSION['user']['birthday'] = $birthday;

        }
    }else{
        echo '<div class="alert alert-danger">密碼錯誤<span class="close">x</span> </div>';
    }

}


?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

    <style>
        body{
            background: #0d222d;
        }

        .both_contain{
            display:flex;
            border-radius:5px;
            background: url("images/bg2.png") no-repeat 0 0;
            background-size:cover;
            position:relative;
        }


        li {
            list-style: none;
        }

        .wrapper{
            background: #000c19;
            /*background: url("images/memeber-bg.png") no-repeat 0 0;*/
            color: #9F7A49;
            width:100%;

            display:flex;
            flex-wrap:wrap;
            justify-content:center;

            padding:50px 0;
        }
        .wrapper a{
            color: #9F7A49;
            text-decoration:none;
            font-size:18px;
        }

        .sideLeft {
            /*border-radius:5px 0 0 5px;*/
            /*background: url("images/bg2.png") no-repeat 0 0;*/
            width: 250px;
            height: 500px;
            box-shadow: #fff 0 0 0px;

            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            justify-content:center;
            align-items:center;
        }

        .leftUl {
            width:100%;
            height:100%;
            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            justify-content:center;
            align-items:center;
        }

        .leftLi {
            margin:25px 0;
            font-weight: bold;
        }

        .sideRight {
            /*border-radius:0px 5px 5px 0px;*/
            /*background: url("images/bg2.png") no-repeat 0 0;*/
            width: 800px;
            /*height: 650px;*/
            box-shadow: #fff 0 0 0px;

            margin-left:0px;

            display:flex;
            flex-wrap:wrap;
            flex-direction:column;
            justify-content:center;
            align-items:center;

            position:relative;

            /*padding-top:10px;*/
            padding:70px 0 70px;

            border-left:1px solid #9f7e52;
        }
        .sideRight h3{
            /*position:absolute;*/
            /*top:60px;*/
            font-weight:bold;
        }
        .member-data {
            margin-top:40px;

            display:flex;
            flex-wrap:wrap;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .group{
            width:300px;

            display:flex;
            flex-wrap:wrap;
            flex-direction:row;
            justify-content:space-between;
            align-items:center;
        }
        .member-data label{
            font-weight:bold;
        }
        .submit{
            background:none;
            border:2px solid #9F7A49;
            border-radius:30px;
            color:#9F7A49;
            padding:5px 15px;
            font-weight:bold;

            margin-top:40px;

            cursor:pointer;
        }
        .forntend_warning{
            color:red;
            display:none;
            position:absolute;
            bottom:110px;
        }
        .alert{
            position:absolute;
            top:100px;
            width:100%;
            height:80px;
            text-align:center;
            line-height:64px;

            z-index:5;
        }
        .alert span{
            cursor:pointer;
        }
        .red{
            color:red;
        }

        @media screen and (max-width:450px){

            .both_contain{
                width:100%;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;

                border-radius:0;
            }

            .wrapper{
                padding:0;
            }
            .sideLeft {
                border-radius:0;
                width: 100%;
                height:195px;
                padding-top:20px;
            }
            .leftUl {
                width:80%;
                height:100%;

                justify-content:flex-start;
                margin:0;
            }
            .leftLi {
                margin:25px 0;

            }
            .sideRight {
                border-radius:0;
                width: 100%;
                height:710px;

                margin-left:0px;
                margin-top:0px;

                padding:50px 50px;
                border-left:0px solid #9f7e52;
                border-top:1px solid #9f7e52;
            }
            .sideRight h3{
            }
            .member-data {
                margin-top:50px;
            }
            .group {
                width: 310px;
            }

            .alert{
                position:absolute;
                top:130px;
                height:180px;
                line-height:160px;
            }
            .forntend_warning{
                bottom:120px;
            }

        }


    </style>

    <div class="wrapper">

        <div class="both_contain">

            <article class="sideLeft">

                <ul class="leftUl">
                    <li class="leftLi"><a href="member-center.php">會員資料</a></li>
                    <li class="leftLi"><a href="member-data-update.php">修改資料</a></li>
                    <li class="leftLi"><a href="order.php">訂單紀錄</a></li>
                    <li class="leftLi"><a href="returns.php">退換貨</a></li>
                    <li class="leftLi"><a href="q&a.php">客服專區</a></li>
                </ul>

            </article>


            <article class="sideRight">

                <h3>會員資料修改</h3>

                <form class="member-data" method="post" onsubmit="return update_checkForm()" name="update_form">

                    <p class="group member-name">
                        <label for="name">姓名: </label>
                        <input type="text" name="name" value="<?=$_SESSION['user']['name']?>">
                    </p>
                    <p class="group member-email">
                        <label for="">Email(帳號): </label>
                        <input type="text" name="email" value="<?=$_SESSION['user']['email']?>">
                    </p>
                    <p class="group member-mobile">
                        <label for="">手機: </label>
                        <input type="text" name="mobile" value="<?=$_SESSION['user']['mobile']?>">
                    </p>
                    <p class="group member-address">
                        <label for="address">地址: </label>
                        <input type="text" name="address" value="<?=$_SESSION['user']['address']?>">
                    </p>
                    <p class="group member-birthday">
                        <label for="birthday">生日: </label>
                        <input type="text" name="birthday" value="<?=$_SESSION['user']['birthday']?>">
                    </p>
                    <p class="group member-password">
                        <label for="password">新密碼: </label>
                        <input type="password" name="new_password" placeholder="若不修改不需輸入">
                    </p>
                    <p class="group member-check-password">
                        <label for="check-password">確認新密碼: </label>
                        <input type="password" name="new_password_check" placeholder="若不修改不需輸入">
                    </p>
                    <p class="group member-password">
                        <label for="password">密碼: </label>
                        <input type="password" name="password" >
                        <small id="" class="red">*輸入密碼後才能修改資料</small>
                    </p>

                    <input class="submit" type="submit" name="" value="確認修改">

                </form>

                <div class="forntend_warning"></div>

            </article>

        </div>

    </div>

    <script>
        function update_checkForm(){

            $(".forntend_warning").hide();

            var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var email= document.update_form.email.value;
            var new_password = document.update_form.new_password.value;
            var new_password_check= document.update_form.new_password_check.value;
            var password= document.update_form.password.value;
            var ispass=true;


            console.log(new_password);
            console.log(new_password_check);

            if( !pattern.test(email) ){
                $(".forntend_warning").text('*請輸入正確的email格式');
                $(".forntend_warning").show();
                ispass=false;
            }
            if(new_password != new_password_check){
                $(".forntend_warning").text('*兩次輸入的新密碼不相同');
                $(".forntend_warning").show();
                ispass=false;
            }
            if(password==''){
                $(".forntend_warning").text('*請輸入密碼');
                $(".forntend_warning").show();
                ispass=false;
            }
            console.log(ispass);

            return ispass;
        }

        $('.close').click(function(){
            $('.alert').hide();
        })
    </script>

<?php include __DIR__. '/html-foot.php'; ?>