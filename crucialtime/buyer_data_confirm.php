<?php
require __DIR__ . '/__db_connect.php';
$page_name = 'buyer_data_confirm';
?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>
<style>
    .wrap{
        min-height:600px;

        /*background: #0d222d;*/
        background:url('imgs/background1.png') no-repeat;
        background-size:contain;
        /*border-top:1px dashed #9f7e52;*/
        /*border-bottom:1px dashed #9f7e52;*/

        padding:30px 0;

        position:relative;
    }
    .data-wrap{
        border-radius:5px;

        min-height:500px;
        width:1200px;
        background:url(imgs/lightbox.png) no-repeat;
        background-size:cover;

        position:absolute;
        left:50%;
        top:50%;
        margin-left:-600px;
        margin-top:-250px;

        display:flex;
    }
    /*col-all*/
    .data-col{
        color:#9F7A49;
        width:400px;

        padding:50px;
    }
    .data-col h4{
        margin-bottom:30px;
        font-weight:bold;
    }
    .form-group{
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    label{
        margin:0;
    }
    /*col2*/
    .col2{
        display:flex;
        justify-content:center;
    }
    /*col3*/
    .col3 img{
        height:30px;
        margin-left:40px;
    }
    .date-select{
        width:182px;
    }
    /*btn_bar*/
    .btn_bar{
        position:absolute;
        bottom:50px;
        right:50px;
    }
    .btn_bar a{
        margin-left:5px;
        padding: 10px;
        border-radius:30px;
        border:2px solid #9F7A49;
        font-weight:bold;
        color:#9F7A49!important;

        cursor:pointer;
    }
    /*warning*/
    .warning {
        color: red;
        position: absolute;
        bottom: 50px;
        left: 50%;
        margin-left: -120px;
        width: 240px;
        text-align: center;
    }
    @media screen and (max-width:450px){
        .wrap{
            min-height:auto;
            padding:0;
        }
        .data-wrap{
            border-radius:0px;
            width:100%;

            position:initial;
            margin-left:0px;
            margin-top:0px;

            display:flex;
            flex-wrap:wrap;
            justify-content:center;

            padding-bottom:40px;
        }
        .data-col{
            padding:30px;
        }
        /*col1*/
        .col1{
            padding:60px 30px 30px 30px;
        }

        /*col2*/
        .col2{
            justify-content:space-between;
        }
        /*col3*/
        .col3{
            padding:30px 30px 155px 30px;
        }
        /*btn_bar*/
        .btn_bar{
            bottom:75px;
            left:50%;
            margin-left:-108px;
        }
        .btn_bar a{
            margin-left:20px;
        }
        /*warning*/
        .warning {
            bottom: 140px;
        }
    }

</style>

<div class="wrap">

    <div class="data-wrap">

        <div class="data-col col1">
            <h4>收件人資料</h4>

            <form name="buyer_data" class="buyer_data" action="">
                <div class="form-group">
                    <label for="buyer_name">收件人姓名</label>
                    <input type="text" name="buyer_name" value="<?= $_SESSION['user']['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="buyer_phone">收件人手機</label>
                    <input type="text" name="buyer_phone" value="<?= $_SESSION['user']['mobile'] ?>">
                </div>
                <div class="form-group">
                    <label for="buyer_address">收件地址</label>
                    <input type="text" name="buyer_address" value="<?= $_SESSION['user']['address'] ?>">
                </div>
                <div class="form-group">
                    <label for="buyer_area_code">郵遞區號</label>
                    <input type="text" name="buyer_area_code" value="">
                </div>
                <div class="form-group">
                    <label for="buyer_email">聯絡Email</label>
                    <input type="text" name="buyer_email" value="<?= $_SESSION['user']['email'] ?>">
                </div>
            </form>

        </div>

        <div class="data-col col2">
            <div class="shiping-data">
                <h4>收件方式確認</h4>
                <p>宅配到府</p>
                <p>運費 NT$ 0</p>
            </div>
        </div>

        <div class="data-col col3">
            <h4>付款方式確認</h4>

            <form name="card_data" class="card_data" action="">

                <p>信用卡付款<img src="imgs/card.png" alt=""></p>

                <div class="form-group">
                    <label for="card_number">信用卡卡號</label>
                    <input type="text" name="card_number">
                </div>

                <div class="form-group">

                    <label>到期日</label>

                    <div class="date-select">
                        月
                        <select name="month" id="">
                            <?php for($i=1; $i<=12; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                        年
                        <select name="year" id="">
                            <option value="2017">2018</option>
                            <option value="2018">2019</option>
                            <option value="2019">2020</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label for="confirm_code">驗證碼</label>
                    <input type="text" name="confirm_code">
                </div>

                <div class="form-group">
                    <label for="card_user_name">信用卡用戶姓名</label>
                    <input type="text" name="card_user_name">
                </div>

            </form>

        </div>

        <div class="btn_bar">
            <a href="cart.php">上一步</a>
            <a class="buy_confirm">確定購買</a>
        </div>

        <div class="warning">

        </div>

    </div>

</div>

<script>
    $('.buy_confirm').click(function(){
        checkForm();
    });

    function checkForm(){

        $(".warning").hide();

        var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

        var buyer_name= document.buyer_data.buyer_name.value;
        var buyer_phone= document.buyer_data.buyer_phone.value;
        var buyer_address= document.buyer_data.buyer_address.value;
        var buyer_area_code= document.buyer_data.buyer_area_code.value;
        var buyer_email= document.buyer_data.buyer_email.value;

        var card_number= document.card_data.card_number.value;
        var confirm_code= document.card_data.confirm_code.value;
        var card_user_name= document.card_data.card_user_name.value;


        var ispass=true;

        if( buyer_name.length<2 ){
            $(".warning").text("*請輸入正確的姓名");
            $(".warning").show();
            ispass=false;
        }
        if( buyer_phone.length<10 ){
            $(".warning").text("*請輸正確的手機號碼");
            $(".warning").show();
            ispass=false;
        }
        if( buyer_address.length<10 ){
            $(".warning").text("*請輸入正確的地址");
            $(".warning").show();
            ispass=false;
        }
        if( buyer_area_code.length<3 ){
            $(".warning").text("*請輸入正確的郵遞區號");
            $(".warning").show();
            ispass=false;
        }
        if( !pattern.test(buyer_email) ){
            $(".warning").text("*請輸入正確的email");
            $(".warning").show();
            ispass=false;
        }

        if( card_number.length<16 ){
            $(".warning").text("*請輸入正確的卡號");
            $(".warning").show();
            ispass=false;
        }
        if(  confirm_code.length<3 ){
            $(".warning").text("*請輸入正確的驗證碼");
            $(".warning").show();
            ispass=false;
        }
        if( card_user_name.length<2 ){
            $(".warning").text("*請輸入正確的信用卡用戶姓名");
            $(".warning").show();
            ispass=false;
        }

        if(ispass){
            location.href ='buy_confirm.php';
        }
    }

</script>
<?php include __DIR__. '/html-foot.php'; ?>
