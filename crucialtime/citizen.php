<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'citizen';


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
    .wrapper h4{
        color:#9f7a49;
        text-align: center;
        margin:10px;
        margin-bottom: 20px;
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
        margin: 30px 0;
        text-align:center;
    }
    .no2{
        width:1100px;
        display: flex;
        margin: 30px auto;
    }
    .no2 .left{
        margin: 30px;
    }
    .no2 .right{
        margin: 30px;
    }
    /*----------------------------------*/

    .no3{
        display: flex;
        width: 1100px;
        margin: 30px auto 0px;
    }
    .no3 .left{
        margin: 20px;
    }
    .no3 .right{
        margin: 20px;
    }
    p{
        line-height: 32px;
    }
    figure{
        height:90px;
        width: 178px;
    }
    figure img{
        width:100%;
    }
    @media screen and (max-width: 450px){
        .wrapper{
            padding:20px 0;
        }

        .no1 img{
            width:100%;
        }
        .no1 .left{
            margin:0;
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
            order:2;
            margin:0 30px;
        }
        .no2 .right{
            order:1;
            margin:0 30px;
        }
        .no3{
            display: flex;
            flex-wrap:wrap;
            width:100%;

            justify-content: center;

            margin-bottom:30px;
        }
        .no3 img{
            width:100%;
            margin-top:10px;
        }
        .no3 .left{
            order:1;
            margin:0 30px;
        }
        .no3 .right{
            order:2;
            margin:0 30px;
        }
    }


</style>

    <div class="wrapper">

        <div class="introduction-tittle">

            <h2>品牌介紹</h2>

            <figure class="introduction-logo">
                <img src="img/logo/citizen.png" alt="">
            </figure>

        </div>

        <section class="no1">
            <img data-aos="flip-left" data-aos-duration="1000" src="img/citizen/no1.png" alt="">
        </section>
        <section data-aos="fade-right" data-aos-duration="1000" class="no2">
            <article class="left">
                <img data-aos="flip-left" data-aos-duration="1000" src="img/citizen/no2.png" alt="">
            </article>
            <article class="right">
                <h3>關於 CITIZEN</h3>
                <p>
                    作為一家專業的腕錶廠商，
                    CITIZEN的製錶過程全面包括了從單一元件製造到腕錶最終組裝的各項工序。
                    我們採用工匠般的手法製造腕錶，不斷開拓技術領域，並利用豐富的經驗探索新的可能性。
                    我們的品牌行銷已超過100多個國家。
                    自1918 年成立以來，我們已堅守理念 - 相信一切皆有更好的可能；而「更好」的開始，
                    就是「現在」。 秉持著這個信念，我們屢創先河，
                    率先引進電波對時、GPS衛星對時技術，還有革命性的光動能技術。
                </p>
            </article>
        </section>
        <section data-aos="fade-left" data-aos-duration="1000" class="no3">
            <article class="left">
                <h4>我們的理念是不斷開拓腕錶新的領域，讓全世界顧客佩戴更頂級的腕錶。</h4>
                <p>
                    我們的靈感不是源於腕錶的歷史，而是它的製造過程。
                    我們常為探索新的可能性而感到興奮。
                    為了帶給顧客感動與靈感，從單一元件製造到腕錶組裝的各道工序，
                    CITIZEN堅持一貫生產，每只腕錶都注入了CITIZEN的理想，完美地展現了技術與美的融合。
                    <br/>
                    我們深信追求進步是無止境的。
                    因此，我們一直開創未來，無論在大大小小的事情上都不斷改進，追求完美。
                    <br/>
                    我們是CITIZEN，我們的世界觀是要不斷前進，不斷改進。
                    我們的時間並非以秒為單位，而是用前進的步伐去衡量。

                </p>
            </article>
            <article class="right">
                <img data-aos="flip-left" data-aos-duration="1000" src="img/citizen/no3.png" alt="">
            </article>
        </section>

    </div>
    <script>
        AOS.init();
    </script>

<?php include __DIR__. '/html-foot.php'; ?>