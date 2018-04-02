<?php
require __DIR__ . '/__db_connect.php';

$page_name='returns';

if(!isset($_SESSION['user'])){
    header('Refresh:0;url=login.php');
};

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
        /*height: 1000px;*/
        box-shadow: #fff 0 0 0px;

        margin-left:0px;

        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:flex-start;
        align-items:center;

        position:relative;
        border-left:1px solid #9f7e52;
    }
    .sideRight h3{
        font-weight:bold;
    }
    .usually-problem{
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-items:center;

        padding-top:70px;
    }
    .box-area{
        width:600px;
        display:flex;
        flex-wrap:wrap;
        flex-direction:row;
        justify-content:center;
        align-items:center;
    }
    .problem-box{
        width:150px;
        height:100px;
        margin:10px;
        background:#000;
        border:1px solid #9F7A49;
        font-weight:bold;
        cursor:pointer;

        display:flex;
        flex-wrap:wrap;
        flex-direction:row;
        justify-content:center;
        align-items:center;
    }
    .contect-service{
        padding:80px 80px 100px 80px;

        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        text-align:center;
    }
    .service-data {
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-items:flex-start;
    }
    .service-data span{
        font-weight:bold;
    }
    .member-data p{
        margin:10px 0;
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
            background-size:cover;

            width: 100%;
            height:945px;

            margin-left:0px;
            margin-top:0px;

            padding:0px 0px;
            border-left:0px solid #9f7e52;
            border-top:1px solid #9f7e52;
        }

        .usually-problem{
            padding-top:70px;
        }
        .box-area{
            margin-top:0px;
            width:100%;
        }

        .contect-service{
            padding:50px 30px 60px;
        }
        .contect-service h3{
            margin-top:5px;
            margin-bottom:15px;
        }
        .service-data {
            display:flex;
            flex-wrap:wrap;
            flex-direction:column;
            justify-content:center;
            align-items:flex-start;
        }
        .service-data span{
            font-weight:bold;
        }
        .member-data p{
            margin:10px 0;
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

            <div class="usually-problem">

                <h3 class="tittle1">常見問題</h3>

                <br>

                <div class="box-area">
                    <div class="problem-box">訂購商品</div>
                    <div class="problem-box">送貨及取貨</div>
                    <div class="problem-box">付款方式</div>
                    <div class="problem-box">追蹤訂單</div>
                    <div class="problem-box">取消訂單</div>
                    <div class="problem-box">退換貨問題</div>
                </div>

            </div>


            <div class="contect-service">

                <h3 class="tittle2">聯絡客服</h3>

                <br>

                <p>
                    在常見問題找不到答案？別擔心，您可以聯繫客服人員，我們一定會盡快在下一個工作日回覆您！
                    <br>
                    <br>
                    我們的服務時間為星期一至五上午9時至下午6時, 公眾假期除外。
                </p>

                <br>

                <div class="service-data">
                    <p class="">
                        <span>客服信箱: </span>
                        henrya35514123@gmail.com
                    </p>

                    <p class="">
                        <span>客服專線: </span>
                        0800-555-666
                    </p>
                </div>

            </div>

        </article>

    </div>

</div>

<?php include __DIR__. '/html-foot.php'; ?>
