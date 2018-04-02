<?php
require __DIR__ . '/__db_connect.php';

$page_name='order';

if(!isset($_SESSION['user'])){
    header('Refresh:0;url=login.php');
};


$per_page=1;

$page=isset($_GET['page'])? intval($_GET['page']):1;


$t_sql="SELECT COUNT(1) FROM `orders` WHERE 1";
$t_result = $mysqli->query($t_sql);
$t_rows = $t_result->fetch_row()[0]; //總筆數

$t_pages = ceil($t_rows/$per_page); //總頁數


$sql=sprintf("SELECT * FROM `orders` WHERE 1 ORDER BY `sid` DESC LIMIT %s, %s", ($page-1)*$per_page, $per_page);
$result=$mysqli->query($sql);




?>

<?php include __DIR__. '/html-head.php'; ?>
<?php include __DIR__. '/html-navbar.php'; ?>

    <style>
        body{
            background: #0d222d;
        }

        .both_contain{
            display:flex;
            border-radius:5px;
            background: url("images/bg2.png") no-repeat 0 0;
            background-size:cover;
            position:relative;

        }


        li {
            list-style: none;
        }

        .wrapper{
            background: #000c19;
            /*background: url("images/memeber-bg.png") no-repeat 0 0;*/
            color: #9F7A49;
            width:100%;

            display:flex;
            flex-wrap:wrap;
            justify-content:center;

            padding:50px 0;
        }
        .wrapper a{
            color: #9F7A49;
            text-decoration:none;
            font-size:18px;
        }

        .sideLeft {
            /*border-radius:5px 0 0 5px;*/
            /*background: url("images/bg2.png") no-repeat 0 0;*/

            width: 250px;
            height: 500px;
            box-shadow: #fff 0 0 0px;

            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            justify-content:center;
            align-items:center;
        }

        .leftUl {
            width:100%;
            height:100%;
            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            justify-content:center;
            align-items:center;
        }

        .leftLi {
            margin:25px 0;
            font-weight: bold;
        }

        .sideRight {
            /*border-radius:0px 5px 5px 0px;*/
            /*background: url("images/bg2.png") no-repeat 0 0;*/
            /*background-size:cover;*/

            width: 800px;
            box-shadow: #fff 0 0 0px;

            margin-left:0px;

            display:flex;
            flex-wrap:wrap;
            flex-direction:column;
            justify-content:center;
            align-items:center;

            position:relative;

            padding:70px 0 70px;
            border-left:1px solid #9f7e52;
        }
        /*.marker{*/
            /*position:absolute;*/
            /*bottom:-30;*/
            /*left:-10;*/
            /*height:30px;*/
            /*width:10px;*/
        /*}*/
        .sideRight h3{
            font-weight:bold;
        }


        table{
            width:700px!important;
            text-align:center;
        }
        thead th{
            border:0px solid #fff!important;
        }
        tbody td{
        }


        .order-table{
            color: #9F7A49;
            margin-top:55px;
        }
        .order-table th{
            width:200px;
        }
        .order-table td{
            width:200px;
        }


        .order-item-wrap{
            margin-top:-15px;
        }
        .order-item{
            display:flex;
            align-items:center;
            justify-content:space-around;
            background:#000;

            margin:5px 0;
        }
        .order-item-table th{
            color:#9F7A49!important;
            background:#000!important;
        }
        .order-item-table td{
            color:#fff;
            border:0px solid #000;
        }


        /*頁面列*/
        .page-nav{
            margin:70px auto 0;

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
            color: #69482f !important;
            /*border-bottom:1px solid #9b7553;*/
        }
        .page-item a{
            margin-right:0;
        }
        .page-item a:hover{
            background:none!important;
            color:#9F7A49;
        }
        .page-item i{
            color:#9b7553!important;
        }

        @media screen and (max-width:450px){
            .both_contain{
                width:100%;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;

                border-radius:0;
            }

            .wrapper{
                padding:0;
            }
            .sideLeft {
                width: 100%;
                height:195px;
                padding-top:20px;
            }
            .leftUl {
                width:80%;
                height:100%;

                justify-content:flex-start;
                margin:0;
            }
            .leftLi {
                margin:25px 0;

            }
            .sideRight {
                background-size:cover;

                width: 100%;
                min-height:550px;

                margin-left:0px;
                margin-top:0px;

                padding:50px 50px;

                border-left:0px solid #9f7e52;
                border-top:1px solid #9f7e52;
                /*border-top:10px solid red;*/
            }
            .sideRight h3{
                margin-bottom:3px;
            }


            table{
                width:100%!important;
            }
            .order-table{
                margin-top:55px;
            }

            .order-item-wrap{
                margin-top:-15px;
                width:100%;
            }
            .order-item{
                width:100%;
                margin:5px auto;
            }
            .order-item-table{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-content:center;
            }

            .order-item-table thead tr{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-content:center;

                padding-top:20px;

                width:100%!important;
            }
            .order-item-table thead tr th{
                margin:30px 0;

                width:100%!important;
            }
            .order-item-table tbody tr{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-content:center;

                margin-top:-280px;

                width:100%!important;
            }
            .order-item-table tbody tr td{
                border:0px solid #000;
                margin:30px 0;

                width:100%!important;
            }


            /*.order-item-table thead tr th{*/
                /*width:200px;*/
            /*}*/
            /*.order-item-table tbody tr td{*/
                /*width:200px;*/
            /*}*/
        }


        .not-found{
            color:red;
            margin:60px;
        }




    </style>

    <div class="wrapper">

        <div class="both_contain">

            <article class="sideLeft">

                <ul class="leftUl">
                    <li class="leftLi"><a href="member-center.php">會員資料</a></li>
                    <li class="leftLi"><a href="member-data-update.php">修改資料</a></li>
                    <li class="leftLi"><a href="order.php">訂單紀錄</a></li>
                    <li class="leftLi"><a href="returns.php">退換貨</a></li>
                    <li class="leftLi"><a href="q&a.php">客服專區</a></li>
                </ul>

            </article>


            <article class="sideRight">

<!--                <img class="marker" src="imgs/marker2.png" alt="">-->

                <h3>訂單紀錄</h3>


                    <?php while($row=$result->fetch_assoc()): ?>


                        <table class="table order-table">

                            <thead class="">
                                <tr>
                                    <th scope="col">訂單編號</th>
                                    <th scope="col">總金額</th>
                                    <th scope="col">購買日期</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?=$row['sid']?></td>

                                    <td class="order_amount" data-val="<?=$row['amount']?>"></td>

                                    <td class="" data-val=""><?=$row['order_date']?></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="order-item-wrap">

                        <?php
                            $d_sql=sprintf("SELECT * FROM order_details WHERE `order_sid` = %s",$row['sid']);
                            $d_result=$mysqli->query($d_sql);
                            ?>

                            <?php while($d_row=$d_result->fetch_assoc()): ?>

                            <div class="order-item" data-sid="">

                                <table class="table order-item-table">

                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">品名</th>
                                            <th scope="col">商品價格</th>
                                            <th scope="col">購買數量</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><?=$d_row['name']?></td>

                                            <td class="money price" data-val="<?=$d_row['price']?>"> </td>

                                            <td class="qty" data-val=""><?=$d_row['quantity']?></td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>

                            <?php endwhile; ?>

                        </div>

                    <?php endwhile; ?>


            <?php if($t_rows!=0): ?>

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

            <?php endif ?>

                <?php
                if($t_rows==0){
                    echo "<div class='not-found'>對不起，目前沒有任何訂單</div>";
                }
                ?>


            </article>

        </div>

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
            $('.order_amount').each(function(){

                var val=$(this).attr('data-val');

                $(this).text( dallorCommas(val));
            });

        };
        change_price();
    </script>



<?php include __DIR__. '/html-foot.php'; ?>