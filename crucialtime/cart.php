<?php
require __DIR__ . '/__db_connect.php';

$page_name = 'cart';

if(!isset($_SESSION['user'])){
    header('Refresh:0;url=login.php');
};


if(!empty($_SESSION['cart'])){
    $keys=array_keys($_SESSION['cart']);
    $sql=sprintf("SELECT * FROM product WHERE sid IN (%s)",implode(',',$keys));
    $result=$mysqli->query($sql);

    $cart_data=[];
    while($row=$result->fetch_assoc()){
        $row['qty'] = $_SESSION['cart'][$row['sid']];
        $cart_data[$row['sid']]=$row;
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
        background: #000c19;
        /*border-top:1px solid #9f7e52;*/
        /*border-bottom:1px solid #9f7e52;*/

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
    .cart-title{
        color:#9F7A49!important;
        font-weight:bold;
        text-align:center;
        margin-bottom:30px;
    }
    .cart-item{
        display:flex;
        align-items:center;
        justify-content:center;

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
        width:700px!important;
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
    .buy-confirm-btn{
        margin-left:10px;
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
    .no-item-notice{
        text-align:center;
        margin:100px;
        color:red;
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
        .cart-item{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;

            background:#000;
            margin:5px 0;
            padding:30px 0 35px;

            /*height:750px;*/
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
        /*tbody tr{*/
            /*display:flex;*/
            /*flex-wrap:wrap;*/
            /*justify-content:center;*/
            /*width:300px;*/
        /*}*/
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
        .i-cancel{
            margin-left:0px;
            margin-top:20px;
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
        }
        .buy-confirm-btn{
            order:2;
        }
        .keep-shopping-btn{
            order:1;
        }

    }

</style>


<?php include __DIR__. '/html-navbar.php'; ?>

<div class="wrap">

<!--    <img src="imgs/sealing_wax.png" alt="">-->

    <div class="container">


<!--        <pre>-->
<!--            --><?php //print_r($_SESSION['cart']) ?>
<!--            --><?php //print_r($result->fetch_all(MYSQLI_ASSOC)) ?>
<!--            --><?php //print_r($cart_data) ?>
<!--        </pre>-->

        <div class="no-item-notice-wrap">
            <?php if(empty($cart_data)): ?>
                <div class="no-item-notice">
                    購物車裡沒有資料
                </div>
            <?php endif?>
        </div>

        <h4 class="cart-title">購物車清單</h4>

        <?php if(empty($cart_data)): ?>

        <?php else: ?>

            <?php foreach($_SESSION['cart'] as $sid => $qty): ?> <!--拿到$_SESSION['cart']裡的key跟value-->

            <div class="cart-item" data-sid="<?=$sid?>">
                <img class="cart-img" src="./imgs/small/<?= $cart_data[$sid]['model'] ?>.png" alt="">

                <table class="table">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">品名</th>
                            <th scope="col">價格</th>
                            <th scope="col">數量</th>
                            <th scope="col">小計</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <td><?= $cart_data[$sid]['name'] ?></td>

                            <td class="money price" data-val="<?= $cart_data[$sid]['price'] ?>"></td>

                            <td>
                                <select class="i-qty">
                                    <?php for($i=1; $i<=10; $i++): ?>
                                        <option value="<?= $i ?>" <?= $i==$qty ? 'selected' : '' ?>><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </td>

                            <td class="money sub-total" data-val="<?= $cart_data[$sid]['price'] * $qty ?>"></td>

                        </tr>
                    </tbody>
                </table>

                <div class="i-cancel">取消購買</div>

            </div>
            <?php endforeach; ?>

            <div class="t-price-wrap">總計: <span id="t-price">0</span></div>

        <?php endif; ?>

        <div class="cart-btn-bar">

            <div class="cart-btn buy-confirm-btn">
                <a class="" href="buyer_data_confirm.php">確定購買</a>
            </div>
            <div class="cart-btn keep-shopping-btn">
                <a class="" href="product_list_fasion.php">繼續選購</a>
            </div>

        </div>

        <div class="bottom"></div>

    </div>
</div>

    <script>
        function dallorCommas(n){
            return 'NT$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        };

        $('.money').each(function(){

            var val=$(this).attr('data-val');

            $(this).text( dallorCommas(val));
        })


        function countTotal(){

            var total=0;
            $('.sub-total').each(function(){
                var sub_n= parseInt($(this).attr('data-val'));
                total += sub_n;
            })

            $('#t-price').text(dallorCommas(total));

        }

        countTotal();



        $('.i-cancel').click(function(){
            var sid = $(this).closest('.cart-item').attr('data-sid');
            var i_cancel = $(this);
            $.get('add_to_cart.php',{sid:sid},function(data){
                i_cancel.closest('.cart-item').remove();
                countCart(data);
                countTotal();

            },'json')
        });



        $('.i-qty').change(function(){

            var cart_item = $(this).closest('.cart-item');
            var sid = cart_item.attr('data-sid');

            var i_qty = $(this);
            var qty = i_qty.val();

            $.get('add_to_cart.php', {sid:sid, qty:qty},function(data){

                var sub_total = qty * cart_item.find('.price').attr('data-val');
                //數值
                var $sub_total = cart_item.find('.sub-total');
                //class為sub-total的這條tb本身
                $sub_total.attr('data-val', sub_total);
                $sub_total.text( dallorCommas(sub_total) );

                countCart(data);
                countTotal();

                // location.href = location.href; // page reload
            },'json');

        });





    </script>


</div>
<?php include __DIR__. '/html-foot.php'; ?>
