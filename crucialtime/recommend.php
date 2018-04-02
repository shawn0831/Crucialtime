<?php
require __DIR__ . '/__db_connect.php';

//if(isset($_GET['dial'])){
//
//    $dial=$_GET['dial'];
//
//
//    $sql = sprintf("SELECT * FROM `product` WHERE `color`= '%s'", $dial);
//    $result = $mysqli->query($sql);
//    $row = $result->fetch_assoc();
//
//    echo json_encode($row['sid']);
//}
//
//

?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

<style>
    .wrap{
        background: #000c19;
        /*border-top:1px dashed #9f7e52;*/
        /*border-bottom:1px dashed #9f7e52;*/

        padding:0px 0 0px;

        margin-top:-16px;
    }


    /*----------光箱----------*/

    .lightbox{
        border-radius:5px;

        width:1020px;
        height:690px;
        background:#fff;

        margin:auto;

        /*position:fixed;*/
        /*top:50%;*/
        /*left:50%;*/
        /*margin-left:-510px;*/
        /*margin-top:-345px;*/

        background:url('imgs/lightbox.png');
        background-size:cover;

        /*display:none;*/
        /*光箱寫法1 display要打開*/
        z-index:1;

        position:relative;
    }
    .lightbox-img-wrap{
        width:510px;
    }
    .lightbox-img{
        float:left;
        margin-top:90px;
        height:510px;
    }

    .detail-box{
        float:left;
        margin-top:15px;
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
    .like-btn-col{
        padding-left:0px;
    }
    .cart-btn-col{
        padding-right:5px;
    }

    .back{
        width:100px;
        height:100px;
        border-radius:50%;

        text-align:center;

        color:#9F7A49;
        border:2px solid #9F7A49;

        opacity:.7;

        position:absolute;
        top:50%;
        right:-150px;
        margin-top:-70.5px;

        cursor:pointer;
        font-size:24px;
    }
    .back p{
        width:150px;
        margin-left:-25px;
        margin-top:5px;

    }
    .back i{
        line-height:100px;
        font-size:40px;
    }
    .back:hover{
        opacity:1;
        transition:.5s;
        color:#9F7A49;
        text-decoration:none;
    }


    @media screen and (max-width:450px){

        .wrap{
            padding:0;
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
            margin-top:0;
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


        .back{
            width:100px;
            height:100px;
            border-radius:50%;

            text-align:center;

            color:#9F7A49;
            border:2px solid #9F7A49;

            opacity:.7;

            position:initial;
            /*top:1090px;*/
            /*left:50%;*/
            display:block;
            /*margin-left:50px;*/
            margin:60px auto;

            cursor:pointer;
            font-size:24px;
        }
        .back p{
            width:150px;
            margin-left:-25px;

        }
        .back i{
            line-height:100px;
            font-size:40px;
        }
        .back:hover{
            opacity:1;
            transition:.5s;
            color:#9F7A49;
            text-decoration:none;
        }
    }

    .cart-check-mark{
        display:none;
    }
    .like-check-mark{
        display:none;
    }

</style>


<div class="wrap">

<div class="lightbox" data-sid="<?= $_SESSION['recommend']['sid']?>">
    <figure class="lightbox-img-wrap">
        <img class="lightbox-img" src="imgs/big/<?=$_SESSION['recommend']['model']?>.png" alt="">
    </figure>

    <div class="detail-box">
        <div class="name"><?=$_SESSION['recommend']['name']?></div>
        <div class="detail"><?=$_SESSION['recommend']['detail']?></div>
        <div class="price" data-val="<?=$_SESSION['recommend']['price']?>"></div>

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



        <a  class="back" href="product_list_fasion.php">
            <i class="fas fa-arrow-right"></i>
            <p>瀏覽更多商品</p>
        </a>

    </div>

</div>

<!--    <div class="back">-->



<!--    </div>-->

</div>



<script>
    function dallorCommas(n){
        return 'NT$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    function change_price(){
        $('.price').each(function(){

            var val=$(this).attr('data-val');

            $(this).text( dallorCommas(val));
        });
    };
    change_price();


    //--------------光箱-------------------
    // var name='';
    // var detail='';
    // var price='';
    //
    // $('.lightbox-btn').click(function(){
    //
    //     var card=$(this).closest('.card');
    //     var sid= card.attr('data-sid');
    //     var src=card.find('img').attr('src');
    //
    //     // console.log(sid);
    //
    //     $('.lightbox').attr('data-sid',sid);
    //
    //     $('.lightbox-img').attr('src',src);

        // $.get('recommend_backend.php',function(data){
        //     name=(data['name']);
        //     detail=(data['detail']);
        //     price=(data['price']);
        //     console.log(name);
        //     console.log(detail);
        //     console.log(price);
        //
        //     $('.name').html(name);
        //     $('.detail').html(detail);
        //
        //     $('.price').attr("data-val",price);
        //     change_price();
        // },'json')


    //     $('.lightbox').css("display","initial");
    //
    // });

    var sid=$('.lightbox').attr('data-sid');


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


    //--------------光箱btn-------------------

    $('.detail-cart-btn').click(function(){

        var sid= $('.lightbox').attr('data-sid');

        $.get('add_to_cart.php',{sid:sid,qty:'1'},function(data){
            console.log(data);
            countCart(data);
        },'json')

        // 開提醒
        $(this).children(".cart-check-mark").css({
            display:"initial"
        });
        $(this).children(".detail-cart-btn-i").css({
            display:"none"
        });
    });

    $('.detail-like-btn').click(function(){

        var sid= $('.lightbox').attr('data-sid');

        $.get('add_to_like.php',{sid:sid,qty:'1'},function(data){
            console.log(data);
            countLikes(data);
        },'json')

        // 開提醒
        $(this).children(".like-check-mark").css({
            display:"initial"
        });
        $(this).children(".detail-like-btn-i").css({
            display:"none"
        });
    });

</script>

<?php include __DIR__. '/html-foot.php'; ?>


