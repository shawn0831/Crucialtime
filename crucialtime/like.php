<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'like';

//$sid= isset($_GET['sid'])? intval($_GET['sid']):0;


if(!isset($_SESSION['user'])){
    header('Refresh:0;url=login.php');
};


if(!empty($_SESSION['like'])){
    $keys=array_keys($_SESSION['like']);
    $sql=sprintf("SELECT * FROM product WHERE sid IN (%s)",implode(',',$keys));
    $result=$mysqli->query($sql);

    $like_data=[];
    while($row=$result->fetch_assoc()){
        $row['qty'] = $_SESSION['like'][$row['sid']];
        $like_data[$row['sid']]=$row;
    }
}

?>
<?php include __DIR__. '/html-head.php'; ?>

<style>
    /*.wrap{*/
        /*background:url(imgs/background1.png) no-repeat;*/
        /*background-size:contain;*/
    /*}*/
    .wrap{
        /*width:100%;*/
        background: #000c19;
        /*border-top:1px dashed #9f7e52;*/
        /*border-bottom:1px dashed #9f7e52;*/

        padding:50px 0;
    }
    .container{
        border-radius:5px;
        background:url(imgs/lightbox.png);
        background-size:cover;
        padding:40px 60px 60px 60px;
    }
    pre{
        color:#fff;
    }
    .like-title{
        color:#9F7A49!important;
        font-weight:bold;
        text-align:center;
        margin-bottom:30px;
    }
    .like-item{
        display:flex;
        align-items:center;
        justify-content:space-around;

        background:#000;
        margin:5px 0;
        padding:30px 0;
    }
    .cart-img{
        width:160px;
        height:160px;
    }
    table{
        color:#fff;
        width:500px!important;
    }
    thead tr th{
        color:#9F7A49!important;
        background:#000!important;
        border:0px solid #fff!important;
        padding-bottom:20px!important;
    }
    tbody td{
        padding-top:20px!important;
    }
    .i-cancel{
        color:#fff;
        cursor:pointer;
        padding:10px;
        margin-left:20px;
        border:1px solid #9F7A49;
        border-radius:30px;
    }
    .check-item{
        color:#fff;
        cursor:pointer;
        padding:10px;
        margin-left:20px;
        margin-bottom:20px;
        border:1px solid #9F7A49;
        border-radius:30px;
    }
    /*bottom*/
    .t-price-wrap{
        color:#9F7A49!important;
        font-weight:bold!important;
        margin:20px 5px 20px 0;
        font-size:20px;
        float:right;
    }
    .cart-btn-bar{
        clear:both;
        float:right;
        margin-top:50px;
    }
    .cart-btn{
        float:right;
    }
    .keep-shopping-btn{
    }
    .cart-btn a{
        color:#9F7A49;
        font-weight:bold;
        border:2px solid #9F7A49;
        border-radius:30px;
        padding:10px;
    }
    .cart-btn a:hover{
        color:#9F7A49!important;
    }
    .bottom{
        clear:both;
    }
    .like-no-item-notice{
        text-align:center;
        margin:100px;
        color:red;
    }

    /*----------光箱----------*/
    .lightbox{
        border-radius:5px;

        width:1000px;
        height:650px;
        background:#fff;
        position:fixed;
        top:50%;
        left:50%;
        margin-left:-500px;
        margin-top:-325px;

        background:url('imgs/lightbox.png');
        background-size:cover;

        display:none;
        /*刷頁寫法display要打開*/
        z-index:10;
    }
    .lightbox-img-wrap{
        width:500px;
    }
    .lightbox-img{
        float:left;
        margin-top:55px;
        height:500px;
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
    .lightbox-name{
        width:400px;
        height:100px;
        border-bottom:1px solid #9F7A49;
        font-size:24px;
        font-weight:bold;

        display:flex;
        align-items:center;
    }
    .lightbox-detail{
        width:500px;
        height:400px;
        font-weight:bold;

        display:flex;
        flex-wrap:wrap;
        align-items:center;
    }
    .lightbox-price{
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
    .no_hover:hover{
        background:#0d222d!important;
        border:1px solid #9f7e52;
    }

    @media screen and (max-width:450px){
        .wrap{
            padding:0;
        }
        .container{
            background:url(imgs/lightbox.png);
            background-size:cover;
            padding:30px 0 60px 0;
            border-radius:0px;
        }
        .like-item{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;

            background:#000;
            margin:5px 0;
            padding:30px 0 35px;
        }
        .cart-img{
            width:160px;
            height:160px;
        }
        table{
            width:400px!important;

            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;

            position:relative;
        }
        thead tr{
            position:absolute;
            top:15px;
            left:50%;
            margin-left:-28px;
        }
        thead tr th{
            background:none!important;
            padding-bottom:60px!important;

            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        tbody tr {
            padding-top:0px!important;
            border:0px solid #fff!important;

            display:flex;
            -webkit-flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        tbody tr td{
            border:0px solid #fff!important;
            padding-top:58px!important;
        }
        .check-item{
            margin-left:0px;
        }
        .like-item-btn-bar{
            margin-top:20px;
        }
        .i-cancel{
            margin-left:0px;
            margin-top:0px;
        }

        /*bottom*/
        .t-price-wrap{
            float:initial;
            text-align:center;
            margin:30px 0px 20px 0px;
        }
        .cart-btn-bar{
            float:initial;

            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;

            margin-top:60px;
        }
        .keep-shopping-btn{
            order:1;
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
        .lightbox-name{
            width:100%;
            height:auto;
            padding:20px 0;
            border-bottom:1px solid #9F7A49;
            font-size:24px;
            font-weight:bold;

            display:flex;
            align-items:center;
        }
        .lightbox-detail{
            width:100%;
            height:auto;
            padding:20px 0;

            font-weight:bold;

            display:flex;
            flex-wrap:wrap;
            align-items:center;

            word-break: break-word;
        }
        .lightbox-price{
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


<?php include __DIR__. '/html-navbar.php'; ?>

<div class="wrap">

    <div class="container">


<!--        <pre>-->
<!--            --><?php //print_r($_SESSION['cart']) ?>
<!--            --><?php //print_r($result->fetch_all(MYSQLI_ASSOC)) ?>
<!--            --><?php //print_r($cart_data) ?>
<!--        </pre>-->

        <div class="like-no-item-notice-wrap">
            <?php if(empty($like_data)): ?>
                <div class="like-no-item-notice">
                    收藏清單裡裡沒有資料
                </div>
            <?php endif?>
        </div>

        <h4 class="like-title">收藏清單</h4>

        <?php if(empty($like_data)): ?>

        <?php else: ?>

            <?php foreach($_SESSION['like'] as $sid => $qty): ?> <!--拿到$_SESSION['cart']裡的key跟value-->

            <div class="like-item" data-sid="<?=$sid?>">
                <img class="cart-img" src="./imgs/small/<?= $like_data[$sid]['model'] ?>.png" alt="">

                <table class="table">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">品名</th>
                            <th scope="col">價格</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <td><?= $like_data[$sid]['name'] ?></td>

                            <td class="money price" data-val="<?= $like_data[$sid]['price'] ?>"></td>

                        </tr>
                    </tbody>
                </table>

                <div class="like-item-btn-bar">
                    <div class="check-item">查看商品</div>
                    <div class="i-cancel">取消收藏</div>
                </div>

            </div>
            <?php endforeach; ?>

        <?php endif; ?>

        <div class="cart-btn-bar">

            <div class="cart-btn keep-shopping-btn">
                <a class="" href="product_list_fasion.php">瀏覽更多商品</a>
            </div>

        </div>

        <div class="bottom"></div>

    </div>

<!--  刷頁寫法  --><?php //if(!$_GET['sid']==0):?>

        <div class="lightbox" data-sid="<?= $_GET['sid']?>">
            <figure class="lightbox-img-wrap">
                <img class="lightbox-img" src="" alt="">
            </figure>

            <div class="detail-box">
                <div class="lightbox-name"></div>
                <div class="lightbox-detail"></div>
                <div class="lightbox-price" data-val=""></div>

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

<!--  刷頁寫法  --><?php //endif ?>

</div>

    <script>
        function dallorCommas(n){
            return 'NT$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        };

        $('.money').each(function(){

            var val=$(this).attr('data-val');

            $(this).text( dallorCommas(val));
        });

        function change_price(){
            $('.lightbox-price').each(function(){

                var val=$(this).attr('data-val');

                $(this).text( dallorCommas(val));
            });
        };





        $('.i-cancel').click(function(){
            var sid = $(this).closest('.like-item').attr('data-sid');
            var i_cancel = $(this);
            $.get('add_to_like.php',{sid:sid},function(data){

                i_cancel.closest('.like-item').remove();
                countLikes(data);

            },'json')
        })

        //--------------光箱 刷頁寫法-------------------

        // $('.check-item').click(function(){
        //
        //     var like_item=$(this).closest('.like-item');
        //     var sid= like_item.attr('data-sid');
        //
        //     location.href = 'like.php?sid='+sid;
        // })

        // var name='';
        // var detail='';
        // var price='';
        //
        // var sid = $('.lightbox').attr('data-sid');
        //
        // $.get('product_detail.php', {sid:sid}, function (data) {
        //     name = (data['name']);
        //     detail = (data['detail']);
        //     price = (data['price']);
        //     model = (data['model']);
        //     console.log(name);
        //     console.log(detail);
        //     console.log(price);
        //     console.log(model);
        //
        //     $('.lightbox-name').html(name);
        //     $('.lightbox-detail').html(detail);
        //     $('.lightbox-price').html("NT$ " + price);
        //     $('.lightbox-img').attr('src','imgs/big/'+model+'.png');
        // }, 'json');
        //
        //
        //
        // $('.lightbox-close').click(function(){
        //     $('.lightbox').css("display","none");
        // });

        //--------------光箱 -------------------
        var name='';
        var detail='';
        var price='';

        var like_item='';
        var sid='';
        var src='';

        $('.check-item').click(function(){

            //關提醒
            $(this).children(".check-mark").css({
                display:"none"
            });
            $(this).children(".detail-cart-btn-i").css({
                display:"initial"
            });
            // $('.detail-cart-btn').removeClass('no_hover');
            // $('.detail-like-btn').removeClass('no_hover');


            like_item=$(this).closest('.like-item');
            sid= like_item.attr('data-sid');
            src=like_item.find('img').attr('src');

            // console.log(sid);

            $('.lightbox').attr('data-sid',sid);

            $('.lightbox-img').attr('src',src);

            $.get('product_detail.php',{sid:sid},function(data){
                name=(data['name']);
                detail=(data['detail']);
                price=(data['price']);


                $('.lightbox-name').html(name);
                $('.lightbox-detail').html(detail);

                $('.lightbox-price').attr("data-val",price);
                change_price();
            },'json');




            console.log(sid);

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

                    // $('.detail-cart-btn').addClass('no_hover');

                }else{
                    $('.cart-check-mark').css({
                        display:"none"
                    });
                    $('.detail-cart-btn-i').css({
                        display:"initial"
                    });

                    // $('.detail-cart-btn').removeClass('no_hover');
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

                    // $('.detail-like-btn').addClass('no_hover');

                }else{
                    $('.like-check-mark').css({
                        display:"none"
                    });
                    $('.detail-like-btn-i').css({
                        display:"initial"
                    });

                    // $('.detail-like-btn').removeClass('no_hover');

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
            // $('.detail-cart-btn').addClass('no_hover');


            var sid= $('.lightbox').attr('data-sid');

            $.get('add_to_cart.php',{sid:sid,qty:'1'},function(data){
                console.log(data);
                countCart(data);
            },'json')
        });

        $('.detail-like-btn').click(function(){

            // 開提醒
            $(this).children(".like-check-mark").css({
                display:"initial"
            });
            $(this).children(".detail-like-btn-i").css({
                display:"none"
            });
            // $('.detail-like-btn').addClass('no_hover');


            var sid= $('.lightbox').attr('data-sid');

            $.get('add_to_like.php',{sid:sid,qty:'1'},function(data){
                console.log(data);
                countLikes(data);
            },'json')
        });

    </script>


</div>
<?php include __DIR__. '/html-foot.php'; ?>
