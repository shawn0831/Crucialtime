<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'omega';


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
        margin:30px;
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

    .no1{
        width:1100px;
        display: flex;
        margin: 10px auto;
    }
    .no1 .left{
        margin: 50px;
    }
    .no1 .right{
        margin: 50px;
    }
    wrapper p{
        color:#fff;
    }
    /*--------------------------------------*/
    .no2{
        width:1100px;
        display: flex;
        margin: 10px auto;
    }
    .no2 .left{
        margin: 30px;
    }

    /*------------------------------*/

    .no3{
        display: flex;
        width:1100px;
        margin: 10px auto;
    }
    .no3 .left{
        margin: 50px;
    }
    .no3 .right{
        margin: 20px;
    }
    /*--------------------------------------*/

    .no4{
        display: flex;
        width:1100px;
        margin: 10px auto;
    }
    .no4 .left{
        margin: 50px;
    }
    .no4 .right{
        margin: 30px;
    }
    p{
        line-height: 32px;
    }
    @media screen and (max-width: 450px){
        .wrapper{
            padding:20px 0;
        }

        .no1{
            display: flex;
            flex-wrap:wrap;
            width:100%;

            justify-content: center;
        }
        .no1 img{
            width:100%;
            margin-top:10px;
        }
        .no1 .left{
            order:2;
            margin:0 30px;
        }
        .no1 .right{
            order:1;
            margin:0 30px;
        }
        .no2{
            display: flex;
            flex-wrap:wrap;
            width:100%;

            justify-content: center;
        }
        .no2 img{
            width:100%;
            margin-top:10px;
        }
        .no2 .left{
            order:1;
            margin:0 30px;
        }
        .no2 .right{
            order:2;
            margin:0 30px;
        }
        .no3{
            display: flex;
            flex-wrap:wrap;
            width:100%;

            justify-content: center;
        }
        .no3 img{
            width:100%;
            margin-top:10px;
        }
        .no3 .left{
            order:2;
            margin:0 30px;
        }
        .no3 .right{
            order:1;
            margin:0 30px;
        }

        .no4{
            display: flex;
            flex-wrap:wrap;
            width:100%;

            justify-content: center;

            margin-bottom:30px;
        }
        .no4 img{
            width:100%;
            margin-top:10px;
        }
        .no4 .left{
            order:1;
            margin:0 30px;
        }
        .no4 .right{
            order:2;
            margin:0 30px;
        }
    }


</style>

<div class="wrapper">

    <div class="introduction-tittle">

        <h2>品牌介紹</h2>

        <figure class="introduction-logo">
            <img src="img/logo/omega.png" alt="">
        </figure>

    </div>

    <section data-aos="fade-right" data-aos-duration="1000" class="no1">
        <article class="left">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/omega/no1.png" alt="">
        </article>
        <article class="right">
            <h3>超凡卓越  絕非虛名</h3>
            <p>
                Ω，(讀音歐米茄)，希臘文的最後一個字母，其意義為”超凡卓越”。
                目前，歐米茄錶廠隸屬瑞士鐘錶集團Swatch Group公司—當今全世界最大的製錶集團。
                歐米茄全系列產品包括星座(Constellation)、碟飛(De Ville)、超霸(Speedmaster)、
                海馬(Seamaster)及博物館系列。1994年，歐米茄推出全世界第一款中置陀飛輪腕錶，
                這是有史以來，第一款將陀飛輪機芯放置於中央心臟位置的手上鍊腕錶，
                歐米茄的標誌再添光彩。
            </p>
        </article>
    </section>
    <section data-aos="fade-left" data-aos-duration="1000" class="no2">
        <article class="left">
            <h3>一個半世紀的時間恆流</h3>
            <p>
                一八四八年，路易．勃蘭特(Louis Brandt)於拉紹德芬創建公司。
                歐米茄在創建之後，一路發展順遂，其所生產懷錶更成為世人矚目的焦點。
                一八九四年，歐米茄率先推出革命創新的「歐米茄」19令(19-line)機蕊，
                憾動當時瑞士傳統鐘錶業，因而奠定了其鐘錶歷史上不可動搖的地位。
                在同一年，
                歐米茄所生產的機芯首度獲頒由日內瓦紐沙特爾(Neuchatel)及倫敦基尤特丁頓(Kew/Teddington)
                天文台所簽發的天文台錶證書。為了紀念此一機芯對全球鐘錶事史的卓越貢獻，
                公司名稱也正式由”Louis Brandt & Fils”改為今日眾所皆知的”Omega”。
            </p>
        </article>
        <article class="right">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/omega/no2.png" alt="">
        </article>
    </section>
    <section data-aos="fade-right" data-aos-duration="1000" class="no3">
        <article class="left">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/omega/no3.png" alt="">
        </article>
        <article class="right">
            <h3>參與人類登陸月球任務</h3>
            <p>
                在經過一系列嚴格的測試後，歐米茄超霸錶被美國太空總署選定為太空飛行任務的計時裝備。
                當尼爾阿姆斯壯在月球踏上一小步時，人類及歐米茄則跨下了一大步。
                著名的「登月錶」也因此成為絕佳品質的代名詞。
                自此每一只歐米茄超霸錶後蓋均刻有
                ”第一只登陸月球的手錶”---First Watch Worn on the Moon。
                1975年7月美蘇太空船進行太空會合，不約而同，
                蘇俄太空總署也選用歐米茄超霸專業計時裝備。
                值得驕傲的是 ，歐米茄超霸錶再度於1998年推出X-33火星錶，
                顧名思義，這款集太空科技與鐘錶工藝於一身的火星錶將再次陪同人類探勘火星，
                成為太空人的絕佳計時夥伴。
            </p>
        </article>
    </section>
    <section data-aos="fade-left" data-aos-duration="1000" class="no4">
        <article class="left">
            <h3>23次的奧運指定計時，榮耀長達百年</h3>
            <p>
                長久以來，由於歐米茄在無數世界性的運動競賽中所擔任的精準計時表現，
                早已讓歐米茄成為這一方面的權威。
                自1932年歐米茄共已擔任23次的奧運會指定計時器。
                1952年歐米茄在奧運會場上接受大會頒贈「奧林匹克十字獎章」，
                表揚它在世界體育所貢獻的心力。
            </p>
        </article>
        <article class="right">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/omega/no4.png" alt="">
        </article>
    </section>
</div>
    <script>
        AOS.init();
    </script>

<?php include __DIR__. '/html-foot.php'; ?>