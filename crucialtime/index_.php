<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'index';

?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

<style>
    a{
        color:#9F7A49;
    }
    a:hover{
        color:#9F7A49;
        text-decoration:none;
    }
    .wrapper{
        background-color: #0d222d;

    }

    .area1{
        position:relative;
        height:720px;
        margin:auto;
        background:url("images/index-bg1.png") no-repeat center center;
        background-size:cover;
    }
    .area2{
        margin:auto;
        display: flex;
        width:1200px;
    }
    .leftSport{
        flex: 1;
        height:400px;
        background-color: #0d222d;
        /*background:url("images/leftSport1.png") no-repeat 20% 55px;*/
        background-size:contain;
        /*opacity: .5;*/
    }
    .leftSport span{
        display: inline-block;
    }
    .abc{
        display: block;
        transform: rotate(180deg);
    }
    .sportArea{
        height:180px;
        width:200px;
        /*background-color: #9bffe6;*/
        margin:136px 200px auto auto;
        transition:1s;
    }
    .sportText{
        letter-spacing: 4px;
        font-size: 32px;
        color:#9F7A49;
        text-align: center;
    }
    .rightMorden{
        background-color: #0d222d;
        height:400px;
        flex:1;
        /*background:url("images/rightMorden1.png") no-repeat 80% 30%;*/
        background-size:contain;
        /*opacity: .5;*/
    }
    .mordenArea{
        height:180px;
        width:200px;
        /*background-color: #9bffe6;*/
        margin:136px auto auto 200px;
        transition:1s;
    }
    .mordenText{
        letter-spacing: 4px;
        font-size: 32px;
        color:#9F7A49;
        text-align: center;
    }
    .moreBtn{
        margin: 70px auto auto auto;
        height:47px;
        width:130px;
        border:1px solid #9F7A49;
        border-radius:23px;
        text-align: center;
        line-height: 47px;
    }
    .moreBtn a{
        display: block;
        font-size:18px;
        font-weight:bold;
    }

    .area3{
        margin-top:50px;
        height:510px;
        background: url("images/bg-w.png") no-repeat 0 0;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content:center;
    }
    .choose{
        height:500px;
        width:100%;
        display: inline-block;
        text-align: center;
    }
    .choose a:hover{
        margin-left:4px;
        letter-spacing:4px;
        transition:.4s;
    }
    .chooseText{
        letter-spacing: 8px;
        /*font-size: 36px;*/
        margin-top:160px;
        color:#9F7A49;
    }
    .style{
        height:135px;
        margin-top:95px;
        display:flex;
        justify-content:center;

        display:none;
    }
    .watch-style{
        height:130px;
        width:130px;
        margin:0 2.5%;
        cursor:pointer;

        line-height:130px;
        color:#9F7A49;
        font-size:24px;
    }

    .color{
        height:135px;
        margin-top:95px;
        display:flex;
        justify-content:center;

        display:none;
    }
    .dial{
        height:130px;
        width:130px;
        margin:0 2.5%;
        cursor:pointer;

        line-height:130px;
        color:#9F7A49;
        font-size:24px;
    }

    .chooseBtn{
        height:47px;
        width:130px;
        margin:100px auto auto auto;
        border:1px solid #9F7A49;
        border-radius:23px;
        text-align:center;
        line-height:47px;
    }
    .chooseBtn a{
        font-size: 18px;
        display: block;

        color:#9F7A49!important;
        cursor:pointer;
    }

    .endBtn{
        height:47px;
        width:130px;
        margin:100px auto auto auto;
        border:1px solid #9F7A49;
        border-radius:23px;
        text-align:center;
        line-height:47px;

        display:none;
    }
    .endBtn a{
        font-size: 18px;
        display: block;

        color:#9F7A49!important;
        cursor:pointer;
    }


    /*效果*/

    /*p{*/
        /*padding:0;*/
        /*margin:0;*/
    /*}*/

    #area1_clock {
        width:700px;

        position:absolute;
        top:100px;
        right:50px;

        font-family: 'Monotype Corsiva';
        text-align: center;
        /*color: #daf6ff;*/
        color:#fff;
        /*text-shadow: 0 0 20px rgba(10, 175, 230, 1), 0 0 20px rgba(10, 175, 230, 0);*/
    }
    .crucial_time{
        display:none;
        width:300px;
    }
    .enjoy{
        display:none;
        width:300px;
    }
    .time {
        letter-spacing: 0.05em;
        font-size: 24px;
        padding: 5px 0;
        /*filter:drop-shadow(0 0 20px rgba(10, 175, 230, 1));*/
    }
    .date {
        letter-spacing: 0.1em;
        font-size: 24px;
        /*filter:drop-shadow(0 0 20px rgba(10, 175, 230, 1));*/
    }
    .text {
        /*letter-spacing: 0.1em;*/
        font-size: 80px;
        padding: 0px 0 0;
        /*filter:drop-shadow(0 0 20px rgba(10, 175, 230, 1));*/
    }

    #area1_replay {
        cursor:pointer;
        width:200px;

        position:absolute;
        top:390px;
        right:300px;


        font-family: 'Share Tech Mono', monospace, "微軟正黑體";
        text-align: center;
        /*color: #daf6ff;*/
        color:#fff;
        /*text-shadow: 0 0 20px rgba(10, 175, 230, 1), 0 0 20px rgba(10, 175, 230, 0);*/
    }
    #area1_replay .replay_logo{
        letter-spacing: 0.05em;
        /*font-size: 130px;*/

        width:180px;
        padding: 5px 0;

        margin:0;

        filter:drop-shadow(0 0 10px rgb(145, 107, 74));
    }

    #area1_replay .replay_notice{
        letter-spacing: 0.1em;
        font-size: 20px;
        padding: 0px 0 0;
        color:#fff;

        margin-top:10px;

        /*filter:drop-shadow(0 0 10px rgb(145, 107, 74));*/
        background:#0d222d;
        border-radius:10px;
        /*border:2px solid #9f7e52;*/

        padding-top:2px;
        color:#9f7e52;
        font-weight:bold;


    }
    .replay_notice:hover{
        margin-left:4px;
        letter-spacing:4px!important;
        transition:.4s;
    }
    #area1_replay a{
        color: #daf6ff;
        filter:drop-shadow(0 0 10px rgb(145, 107, 74));
    }
    /*#area1_replay a:hover{*/
        /*filter:drop-shadow(0 0 0px rgba(10, 175, 230, 1));*/
    /*}*/

    /*閃爍*/
    /*.light{*/
        /*!*text-shadow: 0px 0px 10px rgba(10, 175, 230, 1), 0 0 20px rgba(10, 175, 230, 0);*!*/
        /*filter:drop-shadow(0 0 10px rgba(10, 175, 230, 1));*/

    /*}*/

    @media screen and (max-width:450px){
        .area1{
            height:540px;
            margin:auto;
            background:#000c19;
            background-size:cover;
        }
        .area2{
            margin:auto;
            display: flex;
            flex-direction:column;
            width:100%;
        }
        .leftSport{
            height:300px;
            /*background:url("images/leftSport1.png") no-repeat 9% 30px;*/
            background-size:contain;
        }
        .sportArea{
            width:172px;
            margin:80px 0px auto auto;
        }

        .rightMorden{
            margin-top:30px;
            height:300px;
            /*background:url("images/rightMorden1.png") no-repeat 93% 20px;*/
            background-size:contain;
        }
        .mordenArea{
            margin:80px auto auto 0px;
        }

        .area3{
            margin-top:60px;
            height:auto;
            /*padding:50px 0;*/
        }
        .choose{
            height:auto;
        }
        .chooseText{
            margin-top:70px;
            padding:0 20px;
        }
        .style{
            height:auto;
            margin-top:40px;
            flex-wrap:wrap;
            margin-bottom:70px;
        }
        .watch-style{
            margin:20px;
        }
        .color{
            height:auto;
            margin-top:40px;
            flex-wrap:wrap;
            margin-bottom:65px;
        }
        .dial{
            margin:20px;
        }

        .chooseBtn{
            margin:40px auto 80px auto;
        }
        .endBtn{
            margin:40px auto 80px auto;
        }

        /*效果*/

        #area1_clock {
            width:90%;

            position:initial;

            margin:40px auto 0;
        }
        .crucial_time{
            display:initial;
            margin:30px 0 30px;
        }
        .enjoy{
            display:initial;
            width:200px;
            margin:0 0 30px;
        }
        #area1_clock p{
            display:none;
        }
        .text {
            font-size: 60px;
            padding-left:10px;
        }

        #area1_replay {
            margin:auto;
            margin-top:30px;

            position:initial;
        }
        #area1_replay .replay_logo{
            padding-left:10px;
            filter:none;

        }

        #area1_replay .replay_notice{
            padding: 10px 0 0;
            filter:none;


        }
        #area1_replay a{
            color: #daf6ff;
            filter:none;
        }

        /*閃爍*/
        /*.light{*/
            /*!*text-shadow: 0px 0px 10px rgba(10, 175, 230, 1), 0 0 20px rgba(10, 175, 230, 0);*!*/
            /*filter:drop-shadow(0 0 20px rgba(10, 175, 230, 1));*/

        /*}*/
    }


</style>




<div class="wrapper" >

    <section class="area1">

            <div id="area1_clock">
                <img class="crucial_time" src="imgs/crucial time.svg" alt="">
                <img class="enjoy" src="imgs/enjoy.svg" alt="">
                <p class="date">{{ date }}</p>
                <p class="text">Crucial Time</p>
                <p class="time">{{ time }}</p>
            </div>

            <div id="area1_replay">
                <a href="intro.php">
<!--                    <p class="replay_logo"></p>-->
                    <img src="imgs/logo-big.svg" alt="" class="replay_logo">
                    <p class="replay_notice">觀看介紹</p>
                </a>
            </div>

    </section>

    <section class="area2">
        <article class="leftSport">
            <div class="sportArea">
                <div class="sportText"><h3>運動機能</h3></div>
                <div class="moreBtn"><a href="product_list_sport.php"><span><span class="abc">&#10140</span></span> &nbsp; More</a></div>
            </div>
        </article>
        <article class="rightMorden">
            <div class="mordenArea">
                <div class="mordenText"><h3>時尚品味</h3></div>
                <div class="moreBtn"><a href="product_list_fasion.php">More &nbsp; &#10140 </a></div>
            </div>
        </article>
    </section>

    <section class="area3">
        <article class="choose">

            <h3 class="chooseText">為您挑選一支最適合您的手錶</h3>

            <div class="style">
                <div class="watch-style" data-detail="時尚品味"> 時尚品味 </div>
                <div class="watch-style" data-detail="機能運動"> 機能運動 </div>
            </div>
            <div class="color">
                <div class="dial" data-detail="藍"> 藍 </div>
                <div class="dial" data-detail="黑"> 黑 </div>
                <div class="dial" data-detail="白"> 白 </div>
                <div class="dial" data-detail="其他"> 其他 </div>
            </div>

            <div class="chooseBtn"><a>開始測驗</a></div>
            <div class="endBtn"><a href="recommend.php">前往</a></div>
        </article>
    </section>




    <script>
        var dial="";
        var style="";


        var width=$(window).width();
        console.log(width);

        $('.chooseBtn').click(function(){
            $('.style').css('display','flex');

            if(width>450) {
                $('.chooseText').css({
                    marginTop: "110px",
                });
            }else{
                $('.chooseText').css({
                    marginTop: "60px",
                });
            }

            $('.chooseText').text("請選擇喜歡的錶款風格");
            $(this).css('display','none');
        });

        $(".watch-style").click(function(){
            $('.style').css('display','none');
            $('.color').css('display','flex');
            $('.chooseText').text("請選擇喜歡的錶面顏色");

            style=$(this).attr('data-detail');
            console.log(style);
        });

        $(".dial").click(function(){
            $('.color').css('display','none');
            // $('.price-range').css('display','flex');

            $('.chooseText').text("為您推薦");

            if(width>450) {
                $('.chooseText').css({
                    marginTop: "160px",
                });
            }else{
                $('.chooseText').css({
                    marginTop: "70px",
                });
            }

            $('.endBtn').css('display','block');

            dial=$(this).attr('data-detail');
            console.log(dial);

            $.get('recommend_backend.php',{style:style,dial:dial},function(data){
                console.log(data);
            },'json');
        });



        //  首頁時鐘

        var clock = new Vue({
            el: '#area1_clock',
            data: {
                time: '',
                date: ''
            }
        });

        var week = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
        var timerID = setInterval(updateTime, 1000);
        updateTime();
        function updateTime() {
            var cd = new Date();
            clock.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
            clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
        };

        function zeroPadding(num, digit) {
            var zero = '';
            for(var i = 0; i < digit; i++) {
                zero += '0';
            }
            return (zero + num).slice(-digit);
        }


    //    閃爍
        function lighting(){

            $('.replay_logo').toggleClass('light');
            // $('.replay_notice').toggleClass('light');


            setTimeout(lighting, 1000);

        }

        // lighting();

    //    sport_area/morden_area move
        $(window).scroll(function(){
            var location=$(window).scrollTop();

            if($(window).width()>450){
                if(location>=400){
                    $('.sportArea').css({
                        marginRight:'30px'
                    });
                    $('.mordenArea').css({
                        marginLeft:'30px'
                    });
                }
                if(location<=400){
                    $('.sportArea').css({
                        marginRight:'200px'
                    });
                    $('.mordenArea').css({
                        marginLeft:'200px'
                    });
                }
                if(location>=900){
                    $('.sportArea').css({
                        marginRight:'200px'
                    });
                    $('.mordenArea').css({
                        marginLeft:'200px'
                    });
                }
            }else {
                if (location >= 400) {
                    $('.sportArea').css({
                        marginRight: '115px'
                    });
                    $('.mordenArea').css({
                        marginLeft: '115px'
                    });
                }
                if (location <= 400) {
                    $('.sportArea').css({
                        marginRight: '30px'
                    });
                    $('.mordenArea').css({
                        marginLeft: '30px'
                    });
                }
                if (location >= 900) {
                    $('.sportArea').css({
                        marginRight: '30px'
                    });
                    $('.mordenArea').css({
                        marginLeft: '30px'
                    });
                }
            }
        });




    </script>
</div>

<?php include __DIR__. '/html-foot.php'; ?>
