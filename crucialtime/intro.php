<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'intro';

?>

<?php include __DIR__. '/html-head.php'; ?>


<!--<link rel="stylesheet" href="../lib/animate.css">-->
<!--<link rel="stylesheet" href="../fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.css">-->


<style>
    *{
        padding:0;
        margin:0;
        font-family:"微軟正黑體";
    }
    a{
        text-decoration:none;
    }
    body {
        overflow:hidden;
    }
    .wrap{
        display:flex;
        flex-wrap:wrap;
        background:url('imgs/bg1.jpg');
        background-size:cover;

        overflow:hidden;
        height:100vh;
    }

    .back{
        width:100px;
        height:100px;
        border-radius:50%;

        text-align:center;

        color:#9F7A49;
        border:2px solid #9F7A49;

        opacity:0;
        transition:1s;

        position:absolute;
        top:50%;
        left:12.5%;
        margin-top:-73px;
        margin-left:-52px;

        cursor:pointer;
        font-size:24px;
    }
    .back p{
        width:150px;
        margin-left:-25px;
        margin-top:5px;

    }
    .back i{
        line-height:100px;
        font-size:40px;
    }
    .back:hover{
        opacity:1;
        color:#9F7A49;
        text-decoration:none;
    }

    .middle-logo-wrap{
        position:absolute;
        top:50%;
        left:50%;
        margin-top:-134px;
        margin-left:-110px;

        text-align:center;
        display:flex;
        flex-direction:column;
        align-items:center;
    }
    .middle-logo{
        width:220px;
        opacity:0;
        transition:3s
    }
    .enjoy{
        margin-top:10px;
        width:200px;
        opacity:0;
        transition:3s
    }

    .middle-intro-wrap{
        transform:translateY(-1000px);

        box-sizing:border-box;
        /*padding:10px;*/
        width:360px;
        height:500px;

        position:absolute;
        top:50%;
        left:50%;
        margin-top:-250px;
        margin-left:-180px;

        text-align:center;

        /*border:1px solid #000;*/
        background:#fff;
        filter:drop-shadow(0 0 10px #000);
        /*z-index:10;*/

        transition:2s;
    }
    .middle-intro-wrap img{
        width:200px;

    }
    .middle-intro{
        margin-top:50px;
    }
    .middle-intro-wrap p{
        margin-top:10px;
        font-size:18px;
        font-weight:bold;
        color: #03084b;
    }

    .left-text{
        padding:60px;
        box-sizing:border-box;
        width:25%;
        height:100vh;
        color:#9F7A49;
        font-size:24px;
        font-weight:bold;
        text-align:center;


        display:flex;
        justify-content:center;
        align-items:center;

        opacity:0;
        transition:2s;
    }
    .film-wrap{
        width:50%;
        margin:auto;
        height:71.5vh;
        background:url() #000 center center no-repeat;
        background-size:contain;
        padding:20px;
        box-sizing:border-box;

        border-radius:20px;
        /*filter:drop-shadow(0 0 20px #fff);*/

        transition:2s;
        transform:translateY(-1000px)
    }
    .film{
        width:90%;
        margin:auto;
        height:100%;
        background:url('film/1.jpg') #000 center center no-repeat;
        background-size:contain;
    }
    .film img{
        width:100%;
    }

    /*手錶*/
    .watch-wrap{
        width:25%;
        height:100vh;
        /*background:#000;*/
        /*position:relative;*/
    }
    #watch {
        cursor:pointer;
        float:left;
        position: relative;
        top:50%;
        left:50%;

        margin-top:-70px;
        margin-left:-70px;
        /*filter:drop-shadow(0 0 10px #000);*/

        transition:3s;
    }
    #watch:active .button-bg1{
        filter:drop-shadow(0 0 3px #000);
    }
    #watch:active .button-bg2{
        filter:drop-shadow(0 0 3px #000);
    }
    .next{
        position: absolute;
        margin-top:50px;
        margin-left:30px;
        width:80px;
    }
    .button-bg1{
        width:140px;
        height:140px;

        background: #eaeaea;
        border-radius:50%;
        position: absolute;

        filter:drop-shadow(0px 0px 6px #000);
    }
    .button-bg2{
        width:100px;
        height:100px;

        background: #fff;
        border-radius:50%;
        position: absolute;
        margin:20px; 0 0 20px;

        filter:drop-shadow(0px 0px 6px #000);
    }
    /*.button-bg2:hover{*/
        /*filter:drop-shadow(0 0 5px #000);*/
    /*}*/
    /*#watch p{*/
        /*opacity:.8;*/

        /*position:absolute;*/
        /*top:50%;*/
        /*right:-70px;*/
        /*margin-top:-12px;*/

        /*font-size:30px;*/
        /*font-family:"Monotype Corsiva";*/
    /*}*/
    /*#watch:hover p{*/
        /*opacity:1;*/
    /*}*/



    @media screen and (max-width:450px) {

        .wrap {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            background: url('imgs/bg1.jpg');
            background-size: cover;

            overflow: hidden;
            height: 100vh;

            padding: 20px 0 20px;
        }

        .back {
            width: 50px;
            height: 50px;
            border-radius: 50%;

            text-align: center;

            color: #9F7A49;
            border: 2px solid #9F7A49;

            opacity: 0;
            transition: 1s;

            position: absolute;
            top: 11%;
            left: 15%;
            margin-top: -65px;
            margin-left: -55px;

            cursor: pointer;
        }

        .back p {
            width: 100px;
            margin-left: -25px;
            margin-top: 5px;

            font-size: 18px;
            font-weight: bold !important;

            display: none;
        }

        .back i {
            line-height: 50px;
            font-size: 20px;
        }

        .back:hover {
            opacity: 1;
            color: #9F7A49;
            text-decoration: none;
        }

        .middle-logo-wrap {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -150px;
            margin-left: -95px;

            text-align: center;
        }

        .middle-logo {
            width: 200px;
            /*opacity:0;*/
            transition: 3s
        }

        .enjoy {
            margin-top: 10px;
            width: 180px;
            /*opacity:0;*/
            transition: 3s
        }

        .middle-intro-wrap {
            transform: translateX(-1000px);

            box-sizing: border-box;
            /*padding:10px;*/
            width: 380px;
            height: 410px;

            position: absolute;
            top: 36%;
            left: 50%;
            margin-top: -220px;
            margin-left: -190px;

            text-align: center;

            /*border:1px solid #000;*/
            background: #fff;
            filter: drop-shadow(0 0 10px #000);
            /*z-index:10;*/

            transition: 2s;
        }

        .middle-intro-wrap img {
            width: 170px;

        }

        .middle-intro {
            margin-top: 50px;
        }

        .middle-intro-wrap p {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #03084b;
        }

        .left-text {
            order: 2;

            padding: 60px;
            box-sizing: border-box;
            width: 100%;
            height: 150px;
            color: #9F7A49;
            font-size: 24px;
            font-weight: bold;

            display: flex;
            justify-content: center;
            align-items: center;

            opacity: 0;
            transition: 2s;
        }

        .film-wrap {
            order: 1;

            width: 90%;
            margin: auto;
            margin-top: -15px;

            height: 40vh;
            background: url() #000 center center no-repeat;
            background-size: contain;
            padding: 15px;
            box-sizing: border-box;

            border-radius: 20px;
            /*filter:drop-shadow(0 0 20px #fff);*/

            transition: 2s;
            transform: translateX(-1000px)
        }

        .film {
            width: 90%;
            margin: auto;
            height: 100%;
            background: url('film/1.jpg') #000 center center no-repeat;
            background-size: contain;
        }

        .film img {
            width: 100%;
        }

        /*手錶*/
        .watch-wrap {
            /*transform:rotate(-90deg);*/

            order: 3;

            width: 100%;
            height: 180px;
            /*background:#000;*/
            /*position:relative;*/
        }

        #watch {
            /*margin-right:100px;*/

            cursor: pointer;
            float: left;
            position: relative;
            top: 50%;
            left: 50%;

            margin-left: -70px;
            margin-top: -70px;
            /*filter: drop-shadow(0 0 10px #000);*/
        }

        #watch:hover {
            /*filter: drop-shadow(0 0 20px #000);*/
        }

        #watch p {
            /*transform:rotate(90deg);*/

            opacity: .6;

            position: absolute;
            top: 50%;
            right: -50px;
            margin-top: -16px;
            /*margin-left:-20px;*/

            font-size: 30px;
            font-family: "Monotype Corsiva";
        }

        #watch:hover p {
            opacity: 1;
        }
    }
</style>

<div class="wrap">

<!--<div class="wrap">-->

    <a  class="back" href="index_.php">
        <i class="fas fa-arrow-left"></i>
        <p>回首頁</p>
    </a>

    <div class="middle-logo-wrap">
        <img class="middle-logo" src="film/logo-black.svg" alt="">
        <img class="enjoy" src="imgs/enjoy-black.svg" alt="">

    </div>

    <div class="middle-intro-wrap">
        <img src="film/logo2_black.png" alt="">

        <div class="middle-intro">
            <p>我們致力於販售高品質的手錶</p>
            <p>給予每個顧客最精良的產品是我們的使命</p>
            <p>願我們的服務令您感到賓至如歸</p>

        </div>
    </div>

    <div class="left-text">
        <p>人生總有一些重要時刻</p>
    </div>

    <div class="film-wrap">

        <div class="film">
    <!--        <img src="film/hand-3200400_1920.jpg" alt="">-->
        </div>

    </div>

    <div class="watch-wrap">

        <div id='watch'>
            <div class="button-bg1"></div>
            <div class="button-bg2"></div>
            <img class="next" src="imgs/next.svg" alt="">
        </div>

    </div>

</div>

</body>

<!--</div>-->


<script>

    $(document).ready(function(){

        $('.film-wrap').css({
            transform:"translateY(0px)"
        });

        function left_show(){

            $('.left-text').css({
                opacity:"1"
            });
        }

        setTimeout(left_show,2000);
    });





//    點擊

    var i =1;
    var text=['','人生總有一些重要時刻','還有一些精彩片段','願我們的商品陪您走過世界的每個角落','參與每個片刻'];
    var width= $(window).width();

    console.log(width);

    $('#watch').click(function(){
        i++;

        if(i<5){
            $('.film').css({
                background:"url('film/"+i+".jpg') #000 center center no-repeat",
                backgroundSize:"contain"
            });

            $('.left-text').html("<p>"+text[i]+"</p>");

            $('.left-text p').addClass('animated fadeIn');

        }else if(i==5) {

            if (width <= 450) {
                $('.film-wrap').css({
                    transform: "translateX(1000px)"
                });
                $('.left-text').text('');


                $('.middle-intro-wrap').css({
                    transform: "translateX(0px)"
                });
            } else {

            $('.film-wrap').css({
                transform: "translateY(1000px)"
            });
            $('.left-text').text('');


            $('.middle-intro-wrap').css({
                transform: "translateY(0px)"
            });

            }
        }else{

            if(width<=450){
                $('.middle-intro-wrap').css({
                    transform: "translateX(1000px)"
                });
            }else{
                $('.middle-intro-wrap').css({
                    transform:"translateY(1000px)"
                });
            }


            setTimeout(middle,1000);
            setTimeout(middle2,3000);

            setTimeout(back,6000);


        }
    });

    function middle(){

        $('.middle-logo').css({
            opacity:"1"
        });
        $('#watch').css({
            opacity:"0"
        });
    }
    function middle2(){

        $('.enjoy').css({
            opacity:"1"
        });
    }

    function back(){

        $('.back').css({
            opacity:"1"
        });
    }

</script>



