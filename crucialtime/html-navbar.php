<style>
    *{
        margin:0;
        padding:0;
    }
    a{
        text-decoration:none!important;
    }
    .btn:focus{
        box-shadow: 0 0 0 0rem rgba(0, 123, 255, 0.25);
    }
    .btn-dark:focus{
        box-shadow: 0 0 0 0rem rgba(0, 123, 255, 0.25);
    }


    li{
        list-style:none;
    }
    nav a{
        text-decoration:none;
        color:#fff;
    }
    nav a:hover{
        text-decoration:none;
        color:#fff;
    }
    body{
        font-family:'微軟正黑體';
        background:#000c19;
    }


    .top-nav{
        background:#001a2d;
        height:110px;
        width:100%;
    }
    header{
        float:left;
        /*width:60px;*/

        margin:17px 10px 10px 40px;
    }
    .logo{
        width:80px;
    }

    .toggler{
        float:right;
        padding:61px 40px 0 0;
        color:#fff;
    }

    .iconBar{
        float:right;
        color:#fff;
        cursor:pointer;
        padding:65px 20px 0 0
    }
    .iconBar a{
        margin:20px;
        position:relative;
    }

    .icon{
        color:#9f7e52;;
        height:23px;
    }
    .iconBar span{
        position:absolute;
        top:-16px;
        right:-20px;
        text-align:center;
        font-size:14px;
        padding:0;
        margin:0;
        padding-top:4px;
    }
    .badge{
        color:#fff;
        background:#9F7A49;
        width:22px;
        height:22px;
    }
    .logout_icon{
        /*position:absolute;*/
        /*top:20px;*/
        /*right:40px;*/

        color:#fff;

    }


    /*-----------------------navbar---------------------*/
    .toggle-contant{
        position:absolute;
        top:110px;
        left:0;

        height:0px;
        width:100%;
        background:#000;

        overflow:hidden;

        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:flex-start;

        z-index:10;

        transition:.4s;
    }
    .height{
        height:440px;
        box-sizing:border-box;
    }


    .toggle-contant-left{
        order:2;
        height:150px;

        display:flex;
        align-items:center;
        flex-wrap:wrap;

        opacity:0;
        transition:.2s;
    }
    .toggle-items{
        padding:10px;
        margin:0 30px;
        color:#9F7A49;
        font-size:20px;
        font-weight:bold;
        text-decoration:none !important;
    }
    .toggle-items:hover{
        /*color:#9F7A49;*/
        color:#d7ac5b;
        /*text-decoration:underline!important;*/
        /*transition:.5s!important;*/
    }
    .item1{
        margin-left:20px;
    }


    /*效果*/

    .clock-wrap {
        order:1;
        height:250px;

        opacity:0;
        transition:.2s;

        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .clock-container {
        background-color: #000;
        border-radius: 5px;

        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    .clock-col {
        text-align: center;
        margin-right: 40px;
        margin-left: 40px;
        position: relative;
    }
    .clock-timer{
        margin-top:10px;

        color:#fff;
        font-size: 1rem;
    }

    .clock-label {
        color: rgba(255, 255, 255, 0.35);
        text-transform: uppercase;

        margin-top: 10px;

        color:#fff;
        font-size: 1rem;
    }

    .opacity{
        opacity:1;
    }

    @media screen and (max-width:450px){
        .top-nav{
            height:137px;
            width:100%;
        }
        header{
            margin:21px 10px 0px 30px;
        }
        .logo{
            width:100px;
        }
        .toggler{
            padding:36px 29px 0 0;
        }
        .iconBar{
            clear:both;
            padding:0px 10px 0 0;
            margin-top:-30px;
            margin-right:5px;
        }
        .iconBar a{
            margin:15px;
        }


        .toggle-contant{
            top:137px;
            transition:0s;
        }
        .height{
            height:586px;
        }
        .toggle-contant-left{
            height:350px;
            margin-top:0px;
            flex-direction:column;
            justify-content:space-around;
            order:2;

            transition:0s;
        }
        .toggle-items{
            padding:10px;
            margin:5px 30px;
            text-decoration:none !important;

            font-size:18px;
        }
        .clock-wrap{
            /*margin-top:20px;*/
            height:150px;

            order:1;

            transition:0s;
        }
        .clock-col {
            text-align: center;
            margin-right: 10px;
            margin-left: 10px;

            position: relative;
        }
        .clock-timer{
            font-size:16px;
        }
        .clock-label{
            font-size:16px;
        }
        .logout_icon{

        }
    }

</style>

<nav class="top-nav">
    <header>
        <a href="index_.php">
            <img class="logo" src="imgs/logo-white.svg" alt="">
        </a>
    </header>

    <i class="fas fa-bars fa-2x toggler"></i>

    <div class="iconBar">
        <a href="member-center.php">
            <img class="icon" src="images/member.svg" alt="">
        </a>
        <a href="cart.php">
            <img class="icon" src="images/cart.svg" alt="">
            <span class="badge badge-pill  cart-count">0</span>
        </a>
        <a href="like.php">
            <img class="icon" src="images/heart.svg" alt="">
            <span class="badge badge-pill  like-count">0</span>
        </a>

        <?php if(isset($_SESSION['user'])): ?>
            <a class="logout_icon" href="logout.php">登出</a>
        <?php endif ?>
    </div>

</nav>

<div class="toggle-contant">

    <div class="toggle-contant-left">
        <a class="toggle-items item1" href="index_.php">首頁</a>
        <a class="toggle-items" href="product_list_fasion.php">品味錶款</a>
        <a class="toggle-items" href="product_list_sport.php">機能錶款</a>
        <a class="toggle-items" href="introduction.php">品牌介紹</a>
        <a class="toggle-items" href="mainten-knowledge.php">相關知識</a>
    </div>

    <div class="clock-wrap">

        <div class="clock-container">
            <div class="clock-col">
                <p class="clock-day clock-timer">
                </p>
                <p class="clock-label">
                    Day
                </p>
            </div>
            <div class="clock-col">
                <p class="clock-hours clock-timer">
                </p>
                <p class="clock-label">
                    Hours
                </p>
            </div>
            <div class="clock-col">
                <p class="clock-minutes clock-timer">
                </p>
                <p class="clock-label">
                    Minutes
                </p>
            </div>
            <div class="clock-col">
                <p class="clock-seconds clock-timer">
                </p>
                <p class="clock-label">
                    Seconds
                </p>
            </div>
        </div>

    </div>


</div>



<script>

    $('.toggler').click(function(){
        $('.toggle-contant').toggleClass('height');
        $('.toggle-contant-left').toggleClass('opacity');
        $('.clock-wrap').toggleClass('opacity');

        // $('.top-nav').toggleClass('fix1');
        // $('.toggle-contant').toggleClass('fix2');
    });

//    ------------------------
    var cart_count=$('.cart-count');

    function countCart(obj){

        var sum=0;

        for(var s in obj){  //把obj裡面的key，一個一個拿出來存成s
            sum+=obj[s];　//根據每一個key(sid)，得到每個key對應的值(qty)然後把它加總
        }

        if(sum==0){
            cart_count.text(sum);
            $('.cart-title').html('');
            $('.no-item-notice-wrap').html("<div class=\"no-item-notice\">\n" + "購物車裡沒有資料\n" + "</div>");
            $('.t-price-wrap').html('');
            $('.buy-confirm-btn').html('');

        }else{
            cart_count.text(sum);
        }

    }


    $.get('add_to_cart.php', function(data){
        countCart(data);
    }, 'json');

    //    ------------------------
    var like_count=$('.like-count');

    function countLikes(obj){

        var sum=0;

        for(var s in obj){  //把obj裡面的key，一個一個拿出來存成s
            sum+=obj[s];　//根據每一個key(sid)，得到每個key對應的值(qty)然後把它加總
        }

        if(sum==0){
            like_count.text(sum);
            $('.like-title').html('');
            $('.like-no-item-notice-wrap').html("<div class=\"like-no-item-notice\">\n" + "收藏清單裡沒有資料\n" + "</div>");
        }else{
            like_count.text(sum);
        }
    }

    $.get('add_to_like.php', function(data){
        countLikes(data);
    }, 'json');



//    時鐘

    var dd = new Date();
    var months = "一月,二月,三月,四月,五月,六月,七月,八月,九月,十月,十一月,十二月".split(",");
    var weekdays = "星期日,星期一,星期二,星期三,星期四,星期五,星期六".split(",");
    var month=( months[dd.getMonth()] );
    var day=( weekdays[dd.getDay()] );

    function showTime() {

        var now = new Date();

        $('.clock-day').text(day);
        $('.clock-hours').text(now.getHours());
        $('.clock-minutes').text( now.getMinutes());
        $('.clock-seconds').text( now.getSeconds() );

        setTimeout(showTime, 10);

    }
    showTime();


</script>