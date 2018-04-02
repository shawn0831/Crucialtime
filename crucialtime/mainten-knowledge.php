<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'mainten-knowledge';


?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>


<style>

    .wrapper{
        padding:80px;
        color:#fff;
        margin:auto;
    }
    .wrapper h2{
        color: #9F7A49;
        text-align: center;
        font-weight:bold;
    }
    .wrapper h4{
        color: #9F7A49;
        text-align: center;
        font-weight:bold;
    }


    .button-bar{
        display:flex ;
        justify-content: center;
        flex-wrap:wrap;
    }
    .wrapper button{
        width:150px;
        height:80px;
        margin:50px;
        margin-top:80px;
        background:#0d222d;
        border:solid 0px #9f7e52;
        border-radius:20px;
    }
    .button-bar a{
        text-decoration: none;
        font-size:18px;
        padding:26px 30px;
        color:#fff;
        font-weight:bold;
    }


    .part1{
        margin-top:80px;
    }
    .text1{
        width:1000px;
        margin: 50px auto;
    }
    /*.text1 li{
        margin:10px 0;
    }*/


    .part2{
        margin-top:100px;
    }
    .text2{
        width:1000px;
        margin: 50px auto;
    }
    .button-bar .link-active{
        border:solid 1px #9f7e52;
    }
    li{
        line-height: 32px;
    }



    @media screen and (max-width: 450px){
        .wrapper{
            padding:30px;
        }
        .wrapper h2{
            margin-top:20px;
        }
        .button-bar{
            margin-top:50px;
        }
        .wrapper button{
            width:150px;
            height:80px;
            margin:20px;
            margin-top:0px;
        }

        .part1{
            margin-top:50px;
        }
        .text1{
            width:100%;
            margin: 30px auto;
            margin-left:10px;


        }

        .part2{
            margin-top:50px;

        }
        .text2{
            width:100%;
            margin:30px auto;

        }
        .text2 p{
            margin-left:5px;
        }

    }


</style>

<div class="wrapper">

    <h2>相關知識</h2>

    <div class="button-bar">
        <button class="link-active"><a href="mainten-knowledge.php">保養知識</a></button>
        <button class="link-active-2"><a href="watch-knowledge.php">手錶問題</a></button>
    </div>


    <div data-aos="fade-down" data-aos-duration="1000" class="part1">

        <h4>10個簡單的手錶保養小知識</h4>

            <ol class="text1">
                <li>戴手錶時,手上的汗水對錶殼有腐蝕性,不鏽鋼抗腐蝕性能較佳,但其他金屬材質若長期與汗水接觸,仍然容易腐蝕,應經常用軟布抹去汗水,降低汗水腐蝕錶殼及錶帶
                    的機會。
                </li>
                <li>不要任意打開錶底蓋,以免塵埃進入,影響機芯正常工作。</li>
                <li>不要將手錶與樟腦丸放藏在一起,避免錶油變質。</li>
                <li>不要將手錶放在功率放大器、音響、或電視機的喇叭附近,避免感磁。</li>
                <li>長期存放不戴的手錶,最好定期上發條,自動上鍊的機械錶則應定期輕輕來回擺動幾分鐘或戴在手腕上一段時間,使其自動上鍊,不讓零件長期處於靜止狀態,以保證機芯的運轉性能正常。</li>
                <li>機械錶受潮,最好迅速擦乾,或用乾布蓋住手錶,再用會發熱的白熾燈泡烘烤數分鐘,注意要保持適當距離,溫度不可過高,以免損壞手錶。</li>
                <li>收到一隻心愛的手錶,拆掉外面包裝時,千萬要保存好防護手錶所用的包裝盒。這些保護手錶的包裝盒,能在平常不配戴時給予手錶最安全的保護,避免手錶摔壞或是碰撞,建議平日不戴手錶時,養成習慣放入盒內,就能大大減低手錶損壞的機率;或是使用專用的手錶收藏盒。
                </li>
                <li>平常最好不要天天戴同一只手錶,應多準備幾款不同的手錶交替使用,除了可搭配場合,也避免灰塵、髒污全集中在同一只手錶上。皮革錶帶更要小心呵護,避免經常性磨損拉扯,才能常保手錶如新。</li>
                <li>儘量不要佩戴手錶睡覺,微量夜光材質可能給身體帶來不利影響。睡眠中也可能讓手錶敲擊到硬物而受損。</li>
                <li>回原廠指定服務中心保養,才能得到最佳維修保養。</li>
            </ol>
    </div>


    <div data-aos="fade-down" data-aos-duration="1000" class="part2">

        <h4>為何要到指定的授權維修中心做定期保養?</h4>

        <div class="text2">
            <li>手錶是極度精密的計時儀器,需要定期保養才能保證完美運作。保養內容取決於手錶的款式、氣候和手錶佩戴者的保養情況,【定期檢查】手錶非常重要,機械錶保養的期限為3年
                左右。一般現在市面上的手錶的錶殼多半由錶身、底蓋與錶冠組成,在外殼構件之間會加上橡膠墊圈及防水水以確保防水性能,所以石英錶更換新電池,或是機械錶洗油保養之後,
                都會再經過防水測試,用專業設備測試出哪個部份不防水,並更換新零件。只有通過授權的維修人員,才能讓手錶保持在顛峰狀態,並保證每只手錶開過底蓋之後,仍舊維持防水能
                力。</li>
            <li>一枚好錶,即使正常佩戴多年,也不需要在保養過程中都更換昂貴的零件。原廠的維修費用會有固定收費標準,洗油費用已經包括更換正常磨耗的零件。市場上偶有業者會刻意調低
                費用吸引客戶,然後在維修過程中說服客戶付費更換毋須更換的零件,反而讓保養費用提高。因此保養維修,由經過授權的維修中心處理比較可靠。</li>
            <li>瑞士錶的機芯內部零件都有品牌印記作為識別。如果沒有授權的維修地點往往會使用非正廠零件,甚至使用劣製的仿製零件低價吸引客戶。因此很多品牌的維修中心都必須回收舊零
                件,以維護鐘錶維修品質,保障品牌形象。</li>
        </div>

    </div>

</div>
    <script>
        AOS.init();
    </script>

<?php include __DIR__. '/html-foot.php'; ?>