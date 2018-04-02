<?php
require __DIR__ . '/__db_connect.php';
$page_name = 'product_list_sport';

$q_string = [];

$per_page=16;

$page=isset($_GET['page'])? intval($_GET['page']):1;

$cate= isset($_GET['cate'])? intval($_GET['cate']):0;



$where = " WHERE `style`='機能運動' ";
if(!empty($cate)){
    if($cate==5){
        $where .= " AND `brand`='seiko'";
        $q_string['cate'] = $cate;
    }
    if($cate==6){
        $where .= " AND `brand`='orient'";
        $q_string['cate'] = $cate;
    }
    if($cate==7){
        $where .= " AND `brand`='omega'";
        $q_string['cate'] = $cate;
    }
    if($cate==8){
        $where .= " AND `brand`='citizen'";
        $q_string['cate'] = $cate;
    }if($cate==9){
        $where .= " AND `price_range`='1萬以下'";
        $q_string['cate'] = $cate;
    }
    if($cate==10){
        $where .= " AND `price_range`='1萬~3萬'";
        $q_string['cate'] = $cate;
    }
    if($cate==11){
        $where .= " AND `price_range`='3萬~5萬'";
        $q_string['cate'] = $cate;
    }
    if($cate==12){
        $where .= " AND `price_range`='5萬以上'";
        $q_string['cate'] = $cate;
    }
    if($cate==13){
        $where .= " AND `belt`='鋼帶'";
        $q_string['cate'] = $cate;
    }
    if($cate==14){
        $where .= " AND `belt`='皮帶'";
        $q_string['cate'] = $cate;
    }
    if($cate==15){
        $where .= " AND `belt`='其他'";
        $q_string['cate'] = $cate;
    }
    if($cate==16){
        $where .= " AND `color`='藍'";
        $q_string['cate'] = $cate;
    }
    if($cate==17){
        $where .= " AND `color`='黑'";
        $q_string['cate'] = $cate;
    }
    if($cate==18){
        $where .= " AND `color`='白'";
        $q_string['cate'] = $cate;
    }
    if($cate==19){
        $where .= " AND `color`='其他'";
        $q_string['cate'] = $cate;
    }
}



$t_sql="SELECT COUNT(1) FROM `product` $where";
$t_result = $mysqli->query($t_sql);
$t_rows = $t_result->fetch_row()[0]; //總筆數

$t_pages = ceil($t_rows/$per_page); //總頁數


$c_sql = sprintf("SELECT * FROM `product` $where LIMIT %s, %s", ($page-1)*$per_page, $per_page);
$c_result = $mysqli->query($c_sql);

?>

<?php

$b_sql= "SELECT * FROM `categories` WHERE `parent_sid`='1' ORDER BY `sid`";

$b_result=$mysqli->query($b_sql);

$p_sql= "SELECT * FROM `categories` WHERE `parent_sid`='2' ORDER BY `sid`";

$p_result=$mysqli->query($p_sql);

$belt_sql= "SELECT * FROM `categories` WHERE `parent_sid`='3' ORDER BY `sid`";

$belt_result=$mysqli->query($belt_sql);

$s_sql= "SELECT * FROM `categories` WHERE `parent_sid`='4' ORDER BY `sid`";

$s_result=$mysqli->query($s_sql);



?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

    <style>

        .wrap{
            width:100%;
            padding:50px 50px 95px 50px;
            /*background:#000c19;*/
            background:url('imgs/sport2.png') top center no-repeat;
            background-size:100%;
        }
        .filter {
            margin-top: 0px;
            display: flex;
            flex-direction: wrap;
            justify-content:space-around;
            align-items:flex-start;

            background: #0d222d;
            border: 1px solid #9f7e52;
            border-radius:10px;
            padding:30px 50px 30px 50px;
            box-sizing:border-box;
        }
        .filter ul{

        }
        .filter li{
            margin:10px 0;
        }
        .filter-label-warp{

        }
        .filter-label{
            color:#9f7e52 !important;
            font-weight:bold;
            font-size:20px;
        }
        .filter a{
            color:#fff;

        }

        /*商品列*/
        .product-row{
            margin-top:32px;
        }
        .card{
            width:200px;
            margin-top:50px;

            background:transparent;
            color:#fff;

            border:0px solid #fff;
        }
        .card-body{
            padding:0;
            padding-top:10px;
        }
        .img-wrap{
        }
        .product-item{
            display:flex;
            justify-content:center;
        }
        .product-img {
            object-fit:contain;
            width: 200px;
            height:200px;
            margin: auto;
        }
        .lightbox-btn{
            height:320px;
            cursor:pointer;
        }

        .add-btn-row button{
            width:100%;
            padding:10px;
            cursor:pointer;
            background: #0d222d;
            border:1px solid #9f7e52;
        }
        .add-btn-row button:hover{
            background:#0e2d37;
            border:1px solid #9f7e52;
        }
        .add-btn-row button i{
            color:#9F7A49;
        }
        .cart-btn-col{
            padding-right:0px;
        }
        .like-btn-col{
            padding-left:5px;
        }

        .not-found{
            width:100%;
            text-align:center;
            color:red;
        }

        /*頁面列*/
        .page-row{
            margin-top:100px;
        }
        .page-nav{
            margin:auto;
            /*display:flex;*/
            /*justify-content:space-around;*/
        }
        .page_link{
            font-size:20px;
            /*padding:5px 10px;*/
            margin:20px;
            color: #9b7553;
            background:none!important;
            border:0px solid #9b7553;
        }
        .page-link{
            font-size:20px;
            color: #9b7553; !important;
            border:0px solid #9b7553!important;
            background:none!important;
            margin:-2px 20px 0;
        }
        .page-link:visited{
            color:#9b7553!important;
            border:1px solid #9b7553!important;

        }
        .white{
            color: #ffc28f !important;
            /*border-bottom:1px solid #ffc372;*/
        }
        .page-item a{
            margin-right:0;
        }
        .page-item a:hover{
            margin-right:0;
            color:#9F7A49;
        }
        .page-item i{
            color:#9b7553!important;
        }

        /*----------光箱----------*/
        .lightbox{
            border-radius:5px;

            width:1020px;
            height:690px;
            background:#fff;
            position:fixed;
            top:50%;
            left:50%;
            margin-left:-510px;
            margin-top:-345px;

            background:url('imgs/lightbox.png');
            background-size:cover;

            display:none;
            /*光箱寫法1 display要打開*/
            z-index:10;
        }
        .lightbox-img-wrap{
            width:510px;
        }
        .lightbox-img{
            float:left;
            margin-top:90px;
            height:510px;
        }
        .lightbox-close{
            font-size:20px;
            color:#9F7A49;
            background: #0d222d;
            border:1px solid #9f7e52;
            padding:0 8px;

            position:absolute;
            top:20px;
            right:20px;

            cursor:pointer;
        }
        .detail-box{
            float:left;
        }
        .name{
            width:400px;
            height:120px;
            border-bottom:1px solid #9F7A49;
            font-size:24px;
            font-weight:bold;

            display:flex;
            align-items:center;
        }
        .detail{
            width:510px;
            height:420px;
            font-weight:bold;

            display:flex;
            flex-wrap:wrap;
            align-items:center;
        }
        .price{
            width:400px;
            height:50px;
            font-size:24px;
            font-weight:bold;

            display:flex;
            align-items:center;
        }
        .btn-bar{
            width:400px;
        }
        .btn-bar button{
            padding:10px;
            width:100%;
            cursor:pointer;

            background: #0d222d;
            border:1px solid #9f7e52;
        }
        .btn-bar button:hover{
            background:#0e2d37;
        }
        .btn-bar button i{
            color:#9F7A49;
        }

        @media screen and (max-width:450px){
            .wrap{
                padding:50px 30px;
            }
            /*篩選*/
            .top-filter{
                position:absolute;
                top:30px;
            }
            .filter{
                position:relative;
                padding-top:170px;
                display:flex;
                flex-wrap:wrap;
                flex-direction:row;
                justify-content:center;
            }
            .filter ul{
                /*margin:20px;*/
                width:50%;

            }
            .filter li{
                margin:5px;
                text-align:center;
            }
            .filter a{
                font-size:20px;
            }
            /*商品*/

            .product-row{
                margin-top:15px;
            }
            .product-item{
                display:flex;
                justify-content:center;
            }
            .cart-btn-col{
                padding:0px;
            }
            .like-btn-col{
                padding:0px;
            }
            .add-btn-row button{
                margin:1px;
            }
            /*光箱*/
            .lightbox{
                border-radius:0;

                width:100%;
                height:100%;
                overflow:auto;
                position:fixed;
                top:0;
                left:0;

                margin-left:0px;
                margin-top:0px;

                padding:20px 30px 40px;
            }
            .lightbox-img-wrap{
                margin:auto;
                width:300px;
            }
            .lightbox-img{
                margin-top:30px;
                height:300px;
            }

            .detail-box{
                width:100%;
            }
            .name{
                width:100%;
                height:auto;
                padding:20px 0;
                border-bottom:1px solid #9F7A49;
                font-size:24px;
                font-weight:bold;

                display:flex;
                align-items:center;
            }
            .detail{
                width:100%;
                height:auto;
                padding:20px 0;

                font-weight:bold;

                display:flex;
                flex-wrap:wrap;
                align-items:center;

                word-break: break-word;
            }
            .price{
                width:100%;
                height:50px;
                font-size:24px;
                font-weight:bold;

                display:flex;
                align-items:center;
            }
            .btn-bar{
                margin:0;
                width:100%;
            }
            .cart-btn-col{
                padding:0 0px;
            }
            .like-btn-col{
                padding:0 0px;
            }
            .btn-bar button{
                width:100%;
                padding:15px 0;
                margin:2px;
            }

        }

    </style>


<div class="wrap">


    <!--篩選列-->

    <div class="row">

        <div class="col-md-1"></div>

        <div class="col-md-10">

            <div class="filter" >

                <ul class="top-filter">
                    <li>
                        <a class="filter-label">錶款風格</a>
                    </li>
                    <li>
                        <a class="all-product" href="product_list_fasion.php">全部時尚錶款</a>
                    </li>
                    <li>
                        <a class="all-product" href="product_list_sport.php">全部機能錶款</a>
                    </li>
                </ul>

                <ul>
                    <li class="filter-label-warp">
                        <a class="filter-label">品牌</a>
                    </li>
                    <?php while($b_row=$b_result->fetch_assoc()): ?>
                        <li>
                            <a type=""  href="?cate=<?= $b_row['sid'] ?>"> <?= $b_row['name'] ?> </a>
                        </li>
                    <?php endwhile ?>
                </ul>

                <ul>
                    <li>
                        <a class="filter-label">價格</a>
                    </li>
                    <?php while($p_row=$p_result->fetch_assoc()): ?>
                        <li>
                            <a type=""  href="?cate=<?= $p_row['sid'] ?>"> <?= $p_row['name'] ?> </a>
                        </li>
                    <?php endwhile ?>
                </ul>

                <ul>
                    <li>
                        <a class="filter-label">錶帶</a>
                    </li>
                    <?php while($belt_row=$belt_result->fetch_assoc()): ?>
                        <li>
                            <a type=""  href="?cate=<?= $belt_row['sid'] ?>"> <?= $belt_row['name'] ?> </a>
                        </li>
                    <?php endwhile ?>
                </ul>

                <ul>
                    <li>
                        <a class="filter-label">錶面顏色</a>
                    </li>
                    <?php while($s_row=$s_result->fetch_assoc()): ?>
                        <li>
                            <a type=""  href="?cate=<?= $s_row['sid'] ?>"> <?= $s_row['name'] ?> </a>
                        </li>
                    <?php endwhile ?>
                </ul>

            </div>

        </div>

    </div>


    <!--商品列-->
    <div class="row product-row">

        <div class="col-md-1"></div>

        <div class="col-md-10 product-item-area">

            <?php
            if($t_rows==0){
                echo "<div class='not-found'>對不起，沒有符合此條件的商品</div>";
            }
            ?>

            <div class="row">
                <?php while($row=$c_result->fetch_assoc()):?>
                    <div class="col-md-3 product-item">

                        <div class="card"  style="" data-sid="<?= $row['sid'] ?>" id="<?= $row['sid'] ?>">

                            <a class="lightbox-btn" >
                                <figure class="img-wrap">
                                    <img class="card-img-top product-img" src="imgs/small/<?= $row['model'] ?>.png" alt="Card image cap">
                                </figure>

                                <div class="card-body">
                                    <h6 class="card-title"><?= $row['name'] ?></h6>

                                    <p class="card-text" data-val="<?= $row['price'] ?>">

                                    </p>
                                </div>
                            </a>

                            <div class="row add-btn-row">
                                <div class="col-md-8 cart-btn-col">
                                    <button class="btn btn-dark cart-btn ">
                                        <?php
                                        if(isset($_SESSION['checkCart_sid'][$row['sid']])){
                                            echo '<i class="fas fa-check"></i>';
                                        }else{
                                            echo '<i class="fas fa-shopping-cart"></i>';
                                        }
                                        ?>

                                    </button>
                                </div>
                                <div class="col-md-4 like-btn-col">
                                    <button class="btn btn-dark like-btn" >
                                        <?php
                                        if(isset($_SESSION['checkLike_sid'][$row['sid']])){
                                            echo '<i class="fas fa-check"></i>';
                                        }else{
                                            echo '<i class="fas fa-heart"></i>';
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>

                <?php endwhile ?>

            </div>


            <!--頁面列-->

            <?php if($t_rows!=0): ?>



                <div class="row page-row">

                    <nav class="page-nav">

                        <ul class="pagination">

                            <?php
                            $q_string['page'] = 1;
                            ?>

                            <li class="page-item <?=$page<=1?"disabled":""?>">
                                <a class="page-link bg-dark <?=$page<=1?"disabled":""?>" href="?<?= http_build_query($q_string) ?>">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                            </li>

                            <?php for($i=1; $i<=$t_pages; $i++):
                                // $q_string
                                $q_string['page'] = $i;
                                ?>
                                <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                                    <a class="page_link bg-dark <?= $i==$page ? 'white' : '' ?>" style="visited" href="?<?= http_build_query($q_string) ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>

                            <?php
                            $q_string['page'] = $t_pages;
                            ?>

                            <li class="page-item <?=$page>=$t_pages?"disabled":""?>">
                                <a class="page-link bg-dark" href="?<?= http_build_query($q_string) ?>">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </li>

                        </ul>

                    </nav>

                </div>


            <?php endif ?>

        </div>

        <div class="col-md-1"></div>

    </div>
</div>



<!--   光箱寫法1 --><?php //if(!$sid==0):?>

<div class="lightbox" data-sid="<?= $_GET['sid']?>">
    <figure class="lightbox-img-wrap">
        <img class="lightbox-img" src="" alt="">
    </figure>

    <div class="detail-box">
        <div class="name"></div>
        <div class="detail"></div>
        <div class="price" data-val=""></div>

        <div class="row btn-bar">
            <div class="col-md-8 cart-btn-col">
                <button class="btn btn-dark detail-cart-btn">
                    <i class="fas fa-check cart-check-mark"></i>
                    <i class="fas fa-shopping-cart detail-cart-btn-i"></i>
                </button>
            </div>
            <div class="col-md-4 like-btn-col">
                <button class="btn btn-dark detail-like-btn">
                    <i class="fas fa-check like-check-mark"></i>
                    <i class="fas fa-heart detail-like-btn-i"></i>
                </button>
            </div>
        </div>

    </div>

    <button class="lightbox-close">X</button>
</div>
<!--  光箱寫法1  --><?php //endif ?>


<script>

    function dallorCommas(n){
        return 'NT$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    $('.card-text').each(function(){

        var val=$(this).attr('data-val');

        $(this).text( dallorCommas(val));
    });

    function change_price(){
        $('.price').each(function(){

            var val=$(this).attr('data-val');

            $(this).text( dallorCommas(val));
        });
    };






    $('.cart-btn').click(function(){
        var card=$(this).closest('.card');
        // var combo=card.find('select');
        var sid= card.attr('data-sid');
        // var qty= combo.val();

        $.get('add_to_cart.php',{sid:sid,qty:'1'},function(data){
            console.log(data);
            countCart(data);
        },'json')

        //    提醒
        $(this).children("i").css({
            display:"none"
        });
        $(this).html('<i class="fas fa-check"></i>');
    });

    $('.like-btn').click(function(){
        var card=$(this).closest('.card');
        var sid= card.attr('data-sid');

        $.get('add_to_like.php',{sid:sid,qty:'1'},function(data){
            console.log(data);
            countLikes(data);
        },'json')

        //    提醒
        $(this).children("i").css({
            display:"none"
        });
        $(this).html('<i class="fas fa-check"></i>');
    });

    ////--------------光箱寫法1-------------------
    //var name='';
    //var detail='';
    //var price='';
    //
    //$('.lightbox-btn').click(function(){
    //
    //    var card=$(this).closest('.card');
    //    var sid= card.attr('data-sid');
    //
    //    location.href = 'product_list_fasion.php?<?//= http_build_query($q_string) ?>//&sid='+sid;
    //
    //});
    //
    //var sid = $('.lightbox').attr('data-sid');
    //
    //$.get('product_detail.php', {sid:sid}, function (data) {
    //    name = (data['name']);
    //    detail = (data['detail']);
    //    price = (data['price']);
    //    model = (data['model']);
    //    console.log(name);
    //    console.log(detail);
    //    console.log(price);
    //    console.log(model);
    //
    //    $('.name').html(name);
    //    $('.detail').html(detail);
    //    $('.price').html("NT$ " + price);
    //    $('.lightbox-img').attr('src','imgs/big/'+model+'.png');
    //}, 'json');
    //
    //
    //
    //$('.lightbox-close').click(function(){
    //   $('.lightbox').css("display","none");
    //});

    //--------------光箱-------------------
    var name='';
    var detail='';
    var price='';

    var card='';
    var sid='';
    var src='';

    $('.lightbox-btn').click(function(){

        //關提醒
        $(this).children(".check-mark").css({
            display:"none"
        });
        $(this).children(".detail-cart-btn-i").css({
            display:"initial"
        });


        card=$(this).closest('.card');
        sid=card.attr('data-sid');
        src=card.find('img').attr('src');

        // console.log(sid);

        $('.lightbox').attr('data-sid',sid);

        // var data_sid= $('.lightbox').attr('data-sid');

        $('.lightbox-img').attr('src',src);

        $.get('product_detail.php',{sid:sid},function(data){
            name=(data['name']);
            detail=(data['detail']);
            price=(data['price']);
            sid=(data['sid']);


            $('.name').html(name);
            $('.detail').html(detail);

            $('.price').attr("data-val",price);
            change_price();

        },'json');



        //改光箱cart-marker
        $.get('check_cart_sid.php',{sid:sid},function(data){
            console.log(data);

            if(data==sid){
                $('.cart-check-mark').css({
                    display:"initial"
                });
                $('.detail-cart-btn-i').css({
                    display:"none"
                });

            }else{
                $('.cart-check-mark').css({
                    display:"none"
                });
                $('.detail-cart-btn-i').css({
                    display:"initial"
                });

            }

        },'json');


        //改光箱like-marker
        $.get('check_like_sid.php',{sid:sid},function(data){
            console.log(data);

            if(data==sid){
                $('.like-check-mark').css({
                    display:"initial"
                });
                $('.detail-like-btn-i').css({
                    display:"none"
                });

            }else{
                $('.like-check-mark').css({
                    display:"none"
                });
                $('.detail-like-btn-i').css({
                    display:"initial"
                });

            }
        },'json');

        $('.lightbox').css("display","initial");
    });

    $('.lightbox-close').click(function(){

        $('.lightbox').css("display","none");
    });


    //--------------光箱btn-------------------


    $('.detail-cart-btn').click(function(){

        // 開提醒
        $(this).children(".cart-check-mark").css({
            display:"initial"
        });
        $(this).children(".detail-cart-btn-i").css({
            display:"none"
        });


        var sid= $('.lightbox').attr('data-sid');

        $.get('add_to_cart.php',{sid:sid,qty:'1'},function(data){
            console.log(data);
            countCart(data);
        },'json');


        //改商品列表按鈕

        $("#"+sid+" .cart-btn").html('<i class="fas fa-check"></i>');

    });



    $('.detail-like-btn').click(function(){

        // 開提醒
        $(this).children(".like-check-mark").css({
            display:"initial"
        });
        $(this).children(".detail-like-btn-i").css({
            display:"none"
        });


        var sid= $('.lightbox').attr('data-sid');

        $.get('add_to_like.php',{sid:sid,qty:'1'},function(data){
            console.log(data);
            countLikes(data);
        },'json');


        //改商品列表按鈕

        $("#"+sid+" .like-btn").html('<i class="fas fa-check"></i>');

    });

</script>
<?php include __DIR__. '/html-foot.php'; ?>
