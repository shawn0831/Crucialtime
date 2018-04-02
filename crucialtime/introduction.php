<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'introduction';


?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

<style>

    .wrapper{
        height:700px;

        padding-top:100px;

        position:relative;
    }
    .main{
        position:absolute;
        width:100%;
        height:100%;
        top:0px;

        z-index:1;

        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .main h2{
        color:#9F7A49;
        font-weight:bold;
    }
    .brand-wrapper{
        margin:60px 0;

        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
    }
    .brand-logo{
        /*border:1px solid #9F7A49;*/
        margin:20px;
        /*background:#000;*/
    }
    .brand-logo a{

    }
    .brand-logo img{
        width:200px;
    }
    .brand-wrapper img{
        cursor:pointer;
        margin:0;
    }
    .main p{
        color:#fff;
        font-size:16px;
        font-weight:bold;
        margin-top:10px;
    }

    @media screen and (max-width:450px){
        h2{
            margin:0;
        }
        .wrapper{
            height:1060px;
        }
        .main{
            padding:80px 0 120px;
        }
        .brand-wrapper{
            margin:50px 0;

            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .brand-wrapper img{
            margin:20px 0;
        }

    }

</style>


<div class="wrapper">

    <div class="main">

        <h2>品牌介紹</h2>

        <div class="brand-wrapper">

            <div class="brand-logo">
                <a href="seiko.php">
                    <img src="img/logo/seiko.png" alt="">
                </a>
            </div>

            <div class="brand-logo">
                <a href="orient.php">
                    <img src="img/logo/orient.png" alt="">
                </a>
            </div>

            <div class="brand-logo">
                <a href="omega.php">
                    <img src="img/logo/omega.png" alt="">
                </a>
            </div>

            <div class="brand-logo">
                <a href="citizen.php">
                    <img src="img/logo/citizen.png" alt="">
                </a>
            </div>

        </div>

        <p>請選擇品牌標誌</p>

    </div>

    <div class="main-bg"></div>

</div>


<?php include __DIR__. '/html-foot.php'; ?>
