<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'seiko';


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
        margin-top:10px;
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
    /*-------------------------------------*/
    .no1{
        display: flex;
        margin: 0 auto;
        width: 1100px;
    }

    .no1 .left{
        margin:80px 30px;
    }
    .no1 .right{
        margin:30px;
    }



    /*----------------------------------*/
    .no2 {
        display: flex;
        margin: 0 auto;
        width: 1100px;
    }
    .no2 .left{
        margin: 60px;
    }
    .no2 .right{
        margin: 60px;
    }
    .no2 p{
        text-align: center;
    }



    /*--------------------------------------------*/
    .no3{
        display: flex;
        margin: 0 auto;
        width:1100px;
    }




    .no3 .left{

        margin:30px;
    }
    .no3 .right{
        margin:30px;
    }
    /*----------------------------------------*/
    .no4{
        display: flex;
        margin: 0 auto;
        width:1100px;
    }
    .no4 .left{
        margin:100px 20px;
    }
    .no4 .right{
        margin:30px;
    }
    p{
        line-height: 32px;
        margin-bottom: 0;
    }
    /*------------------------------------------*/
    @media screen and (max-width: 450px){
       .wrapper{
           padding:20px 0;
       }
        .no1{
            display: flex;
            flex-wrap:wrap;
            justify-content:center;
            width:100%;
        }
        .no1 .left{
            margin:0;
            text-align: center;
            order:2;
        }
        .no1 .right{
            order:1;
        }

        .no2{
            display: flex;
            flex-wrap:wrap;
            justify-content:center;
            width:100%;
            margin:40px 0 50px;
        }
        .no2 img{
            width:100%;
        }
        .no2 .left{
            margin: 30px;
        }
        .no2 .right{
            margin: 30px;
        }

        .no3{
            display: flex;
            flex-wrap:wrap;
            justify-content:center;
            width:100%;

            margin-top:-50px;
        }
        .no3 img{
            width:100%;
        }
        .no3 .left{
            order:1;
        }
        .no3 .right{
            order:2;
            margin-top:-50px;
        }

        .no4{
            display: flex;
            flex-wrap:wrap;
            justify-content:center;
            width:100%;

            margin-bottom:30px;
        }
        .no4 img{
            width:100%;
        }

        .no4 .left{
            order:2;
            margin-top:0;
            margin-bottom:0;
        }
        .no4 .right{
            order:1;
        }
    }


</style>

<div class="wrapper">
    <div class="introduction-tittle">

        <h2>品牌介紹</h2>

        <figure class="introduction-logo">
            <img src="img/logo/seiko.png" alt="">
        </figure>

    </div>

    <section data-aos="fade-right" data-aos-duration="1000" class="no1">
            <article class="left" >
                <img data-aos="flip-left" data-aos-duration="1000" src="img/seiko/no1.png" alt="">
                <h6>SEIKO 的創始人-服部金太郎</h6>
            </article>

        <article class="right">
            <h3>品牌創始</h3>
            <p>明治時代,是日本鐘錶產業的開始,也是成就SEIKO鐘錶王國的契機。1854年日本
                對國際市場的開放,開啟了日本與歐洲和美國搭起的鐘錶貿易橋樑。當時,全世界
                各地因鐵路系統的發達等原因,人們開始前所未有的忙碌日常生活。因而對於準確
                時間的需求大增,甚至超過了一些奢侈品的需要。
            </p>
            <br/>
            <p>1969年12月25日,SEIKO搶先於任何其他錶廠,跨越了終點線,首次發表石英
                Astron錶款。石英的誕生開始讓日本的製錶工藝受到世界注目。接著,精工以一連
                串的世界第一只石英錶產品如1972年推出的世界第一只石英女錶等,卓越技術令
                許多歐美鐘錶大廠驚豔。
            </p>
                <br/>
            <p>
                1873年1月1號,全世界所通用的西洋日曆時間正式成為日本全國官方的國曆計算
                系統。西洋日曆系統的引進,造就了日本的鐘錶工業的全新發展。當時,日本大部
                分的時鐘是從美國進口、懷錶進口於瑞士地區、鐵製鬧鐘則是來自德國。就在東京
                、大阪、京都和名古屋等國內地方城市,大量的進口鐘錶相對的刺激了自行仿造製
                作的生產。也就是從那時候開始,國內鐘錶產業開始了發展的契機。1881年,服
            </p>
        </article>
    </section>
    <section data-aos="fade-left" data-aos-duration="1000" class="no2">

        <article class="left">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/seiko/no2-1.png" alt="">
            <p>1924年正式採用 SEIKO 作為品牌名稱</p>
        </article>

        <article class="right">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/seiko/no2-2.png" alt="">
            <p>創立和服部時計店-圖為當時的工廠</p>
        </article>

    </section>

    <section data-aos="fade-right" data-aos-duration="1000" class="no3">

        <article class="left">
            <h3>不斷創新的技術領域</h3>
            <p>如大眾所知,除了在石英錶的驚人成就外,SEIKO在機械錶領域也得
                到令人讚賞的成績。自1913年推出日本第一技機械錶以來,不斷投
                注心力。在1960年集技術大成,推出和瑞士頂級品牌不相上下的「
                Grand Seiko」,並於1968年得到天文台比賽第一名的佳績,現在更
                以超越瑞士天文台標準的精準度獨步機械錶領域。
            </p><br/>
            <p>SEIKO是世界上少數從細小零件、齒輪、游絲到機芯皆為100%自己
                獨力製造的專業錶廠,在全世界推出不同價位帶和多種功能的錶款,
                滿足消費者的不同需求與品味。在台灣市場,SEIKO提供了高級錶的
                Credor、Grand Seiko、G.L.T、Ananta等系列,以及白領階級適用
                的SEIKO多種錶款的選擇。
            </p><br/>
        </article>

        <article class="right">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/seiko/no3.png" alt="">
        </article>

    </section>

    <section data-aos="fade-left" data-aos-duration="1000" class="no4">

        <article class="left">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/seiko/no4.png" alt="">
        </article>

        <article class="right">
            <h3>創新與洗鍊</h3>
            <p>SEIKO是一個卓越的製錶專家,不斷為自己專業且專注的形象而努力
                。為求新的突破與再造,SEIKO發現唯一的解決之道,就是在全球的
                市場與消費者中,定義並執行出一個完整、統一與清楚的願景與方向
                。對於SEIKO來說,有兩個眾所皆知的事實,那就是計時歷史上不斷
                創造的第一紀錄與創新,以及擁有設計最適合人類配戴的卓越技術。
            </p><br/>
            <p>據TNS市場研究公司2010所調查的領導品牌結果出爐,SEIKO榮獲為
                零售商品鐘錶類首選品牌之一,獲選的評價為SEIKO的良好品質、實
                用性和創新技術。行銷全世界40多個國家的SEIKO在其他國家也得到
                類似的殊榮。成就今天的榮耀則是來自130多年的製錶傳統技術和不
                斷創新領先的開發。
            </p><br/>
            <p>
                SEIKO帶著「革新」與「洗鍊」的精神,是永遠的時間推動者。
            </p>
        </article>

    </section>
</div>
    <script>
        AOS.init();
    </script>

<?php include __DIR__. '/html-foot.php'; ?>