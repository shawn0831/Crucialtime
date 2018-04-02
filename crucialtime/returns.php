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
        height: 500px;
        box-shadow: #fff 0 0 0px;

        margin-left:0px;

        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-items:center;

        position:relative;
        border-left:1px solid #9f7e52;
    }
    .sideRight h3{
        position:absolute;
        top:80px;
        font-weight:bold;
    }
    .service-data {
        margin-top:40px;

        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        justify-content:center;
        align-items:flex-start;
    }
    .service-data span{
        font-weight:bold;
    }
    .return-notice{
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
            width: 100%;
            height:550px;

            margin-left:0px;
            margin-top:0px;

            padding:50px 50px;

            border-left:0px solid #9f7e52;
            border-top:1px solid #9f7e52;
        }
        .sideRight h3{
            top:100px;
        }
        .service-data {
            margin-top:30px;
        }
        .return-notice{
            text-align:center;
            margin-top:30px;
        };

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

            <h3>退換貨</h3>

            <p class="return-notice">
                *若需退換貨請先至客服專區查閱常見問題，並連絡客服人員
            </p>

            <div class="service-data">

                <p class="service-email">
                    <span>客服信箱: </span>
                    henrya35514123@gmail.com
                </p>

                <p class="service-phone">
                    <span>客服專線: </span>
                    0800-555-666
                </p>
            </div>

        </article>

    </div>

</div>

<?php include __DIR__. '/html-foot.php'; ?>
