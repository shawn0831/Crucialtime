<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'watch-knowledge';


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
        .wrapper h5{
            color: #9F7A49;
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
            margin: 60px auto 50px;
        }
        .button-bar .link-active-2{
            border:solid 1px #9f7e52;
        }
        p{
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
                margin:40px auto 30px;

            }
            .text1 p{
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

        <h4>手錶常見問題</h4>

        <div class="text1">

            <h5>自動錶為什麼會停擺?</h5>
            <p>自動上鍊的機械錶,靠自動盤(或稱擺陀)擺動上緊發條,因此手錶必須佩戴在手腕上,隨著手臂運動才能產生能量。一般全自動手錶每天至少應佩戴8小時以上才能補足發條
                能量,但也不是絕對。建議假日也要戴錶,才能不斷供給發條能量。除開手錶機芯設計不良的原因之外,現代白領階級多半在辦公室從時靜態工作,身體活動量較低,因此手
                錶容易停擺;如屬於此種原因,可採用手上鍊的方式來彌補。</p>
            <h5>自動錶平時需不需要手上鍊?</h5>
            <p>自動錶是在手上鍊機芯上額外設計自動上鍊模組,因為它的結構細緻,長期使用比較容易磨損,因此建議正常佩戴狀態下只要手錶能正常運行,就不需要用手上鍊,如此可以減
                少撥針輪系的磨耗,也減少定期保養時可能額外支出的零件更換費用。</p>
            <h5>石英錶停擺的可能原因?</h5>
            <p>首先看錶冠是否維持在平常貼著錶殼的位置,再來可以確認指針是否接觸到不應碰觸的部份,因為手錶零組件非精密,大力碰撞就可能讓原因的零件移位;再來就應因授權的保
                養維修服務中心檢查電池是否耗盡。</p>
            <h5>那些狀況下手錶會進水?</h5>
            <p>環境溫度變化太大,手錶忽冷忽熱,那麼手錶的橡膠墊圈會熱漲冷縮,就可能滲水。例如手錶放在車中或窗邊,受到陽光直曬,再進入冷氣房,然後去洗手;或是洗三溫暖、佩
                戴手錶洗熱水澡,都可能導致手錶進水。不慎把錶冠拉離平常的位置,也可能導致進水。</p>
            <h5>有些手錶標明防水,但怎麼會進水氣?</h5>
            <p>正常情況下防水錶不會出現水氣。但如果防水膠圈受到清潔劑或髒污、油垢侵蝕而老化,那麼手錶防水能力也會隨之劣化。溼度高的時節(如梅雨季)或是溫差大的環境(如三
                溫暖或浴室),都可能導致水氣竄進手錶裡。一旦發現手錶出現水氣,就應該迅速送到授權服務中心保養,避免縮短手錶正常使用壽命。</p>
            <h5>手錶開過底蓋之後還能防水嗎?</h5>
            <p>手錶的防水功能主要靠橡膠防水墊圈密封鏡面、底蓋及錶冠的縫隙,如經常佩戴手錶洗熱水澡或必須長期接觸水,都會加速防水膠圈老化變形,高溫、汗水、游泳池的氯氣及香
                水等都會導致防水墊圈硬化,因此建議最好每隔1-2年就把手錶送到授權服務中心測試防水性能及保養。石英錶更換電池及機械錶洗油後都會再經過防水測試,用專業設備測試
                出哪個部份不防水,並更換新零件。只有通過授權的維修人員,才能讓手錶保持在顛峰狀態,並保證每只手錶開過底蓋之後,仍舊維持防水能力。</p>
            <h5>石英錶為什麼要定期更換電池?</h5>
            <p>石英錶依所搭載的機芯與使用環境不同,電池壽命約為1-2年不等。頂級石英錶常有電池耗盡提示功能,當電力即將耗盡,秒針會與平時跳動方式不同,可能是每兩秒或四秒一
                跳,這時就應該要更換新電池,以避免電池漏液、損壞內部零件。不少貴客擁有多枚手錶,不戴的錶會將錶冠拉到調整時間的位置,這時錶並不會運行,但是電池仍然會自然放
                電,如果電力耗盡時仍未及時更換,可能過度放電,導致漏液,一樣腐蝕機芯,維修費用更會遠遠超過更換電池費用。</p>
            <h5>藍寶石水晶鏡面也會劃出痕跡嗎?</h5>
            <p>手錶使用的藍寶石水晶鏡面並非天然藍寶石,而是由精細的氧化鋁粉末為原料,在高溫的爐內結成類似藍寶石結晶塊,再經過無數工序才製成手錶上純淨無比的藍寶石水晶鏡面
                ,具有抗磨損與防蝕效果。它的硬度僅次於鑽石,相當於鋼的七倍,不易磨損,但不是永不磨損。像鑽石、磨刀石、砂紙、砂子、挫刀、花崗石面、水泥牆(內有砂子)都還是
                可能刮花鏡面。</p>
            <h5>全鋼錶帶會出現鏽斑或褪色嗎?</h5>
            <p>不鏽鋼的種類很多,合金裡添加的主要成份為鎳與鉻;而鎳、鉻等元素易受強酸強鹼侵蝕。人體排出的汗液中就有鹽酸的成分,佩戴手錶時,若經常被汗水接觸或聽任酸鹼鹽等
                髒污積聚而未及時清理,錶帶等處就會慢慢出現鏽斑,手腕上也會出現黑色污漬。這主要是由於不鏽鋼所含的鎳等元素與人體中的汗液或醋、漂白劑、修正液或其它化學藥品、
                化學試劑、化妝品等接觸造成的。一般的處理辦法是將錶帶用軟毛牙刷蘸中性清潔劑輕輕刷洗後,再以軟布擦乾;或者到授權服務中心用專業超音波儀器清洗。</p>
            <h5>如何解決機械錶感磁的現象?</h5>
            <p>一旦手錶感磁就會突然之間運行的很快,甚至每天快上1-2小時。平時佩戴機械錶要盡量遠離磁場,例如音響、電視機、手機等電器的喇叭都會形成強磁場。處理感磁手錶並不困
                難,只需到授權服務中心專門設備進行消磁,僅需短短30秒鐘,手錶就能消磁,毫不影響手錶性能。</p>

        </div>

    </div>

</div>
    <script>
        AOS.init();
    </script>

<?php include __DIR__. '/html-foot.php'; ?>