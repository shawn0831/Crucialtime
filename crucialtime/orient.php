<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'orient';


?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

<style>

    .wrapper{
        padding:60px 50px 120px;
    }

    .wrapper h2{
        color: #9f7a49;
        text-align: center;
        margin: 30px 0;
        font-weight:bold;
    }
    .wrapper p{
        color:#fff;
    }
    .wrapper h3{
        color:#9f7a49;
        text-align: center;
        margin:20px;
        font-weight:bold;
    }
    .wrapper h6{
        color:#fff;
        text-align: center;
    }
    .introduction-tittle{
        text-align:center;
    }
    .introduction-logo{
        margin:30px auto ;
        padding:0;
        display:inline-block;
    }
    .introduction-logo img{
        width:200px;
    }

    .top {
        margin: 30px 0;
        text-align:center;
    }

    .mid {
        display: flex;
        width: 1100px;
        margin: 0 auto;
    }
    .mid .left{
        margin:30px;
    }
    .mid .right{
        margin: 30px;
        color:#fff;
    }
    .bottom{
        display: flex;
        width: 1100px;
        margin: 0 auto;
    }
    .bottom .left{
        margin:50px 30px;
        color:#fff;
    }
    .bottom .right{
        margin:30px;

    }
    p{
        line-height: 32px;
    }
    /*--------------------------------------------------*/
    @media screen and (max-width: 450px){

        .wrapper{
            padding:20px 0;
        }
        .top img{
            width:100%;
        }

        .mid{
            display: flex;
            flex-wrap:wrap;
            width:100%;

            justify-content: center;
        }
        .mid img{
            width:100%;
            margin-top:10px;
        }
        .mid .left{
            order:2;
            margin:0 30px;
        }
        .mid .right{
            order:1;
            margin:0 30px;
        }
        .bottom{
            padding:30px 0;
            margin-bottom:0px;

            display: flex;
            flex-wrap:wrap;
            width:100%;
        }
        .bottom img{
            margin-top:10px;
            width:100%;
        }
        .bottom .left{
            margin:0 30px;
        }
        .bottom .right{
            margin:0 30px;
        }
    }


</style>


<div class="wrapper">

    <div class="introduction-tittle">

        <h2>品牌介紹</h2>

        <figure class="introduction-logo">
            <img src="img/logo/orient.png" alt="">
        </figure>

    </div>

    <figure class="top">
        <img data-aos="flip-left" data-aos-duration="1000" src="img/orient/no1.png" alt="">
    </figure>

    <section data-aos="fade-right" data-aos-duration="1000" class="mid">
        <article class="left">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/orient/no2.png" alt="">
        </article>
        <article class="right">
            <h3>品牌沿革</h3>
            <p>
                東方錶於1950年在日本東京成立，公司的歷史可追溯到1901年由公司的創始人吉田莊五郎先生，
                在繁華的東京市上野商業區所開設第一家手錶批發店。
                東方錶成立後的60多年以來，以積極奮鬥的精神，重視全球性的市場策略，
                讓東方品牌風行世界各地。 在日本市場，
                東方錶推出具有頂級水平的「皇家東方」(Royal Orient) 系列機械手錶，
                多年以來贏取了廣大消費者的欣賞與愛戴。
                近年以來, 東方錶也不斷為海外市場推出眾多高品質的商品,
                其中以特殊鏤空造型的『東方之星-SKELETON系列』；
                最能表現出東方錶的魅力及高水準技術。 經過60多年在手錶行業上的耕耘,
                讓東方錶能夠在微型精密技術上有足夠的發展力量, 讓業務擴展到列印機, 石英振盪器,
                矽晶片及其它相關的電子產品的資訊科技領域中。
                東方錶更會進一步改良其精密技術, 強化成本效益,
                以加強品牌在市場的競爭力, 擴大高增值產品的銷售量。
            </p>
        </article>

    </section>
    <section data-aos="fade-left" data-aos-duration="1000" class="bottom">
        <article class="left">
            <h3>不斷創新的技術領域</h3>
            <p>
                ORIENT始創於1950年，一直致力發展工藝技術，
                創作不同款式的手錶，以滿足顧客對生活上完美素質的追求。
                東方錶是日本三大品牌手錶之一，
                與另兩大名錶CITIZEN、SEIKO相比，東方錶是日本的「西式」錶，
                它更注重在款式設計上走國際化路線，強調歐洲傳統風格。
                而且優質低價，從不同品牌的細分上看，可以感覺到東方錶與其它廠家的個性區別。
                ORIENT相信，顧客希望得到的是「高素質」的手錶產品，
                而且要「永不過時」，「在不同時代有其寶貴價值」。
                多年來，ORIENT一直秉持上述諸項，作為其製錶的主導原則。
            </p>
        </article>
        <article class="right">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/orient/no3.png" alt="">
        </article>
    </section>

</div>
    <script>
        AOS.init();
    </script>

<?php include __DIR__. '/html-foot.php'; ?>