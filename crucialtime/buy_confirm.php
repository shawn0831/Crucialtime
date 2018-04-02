<?php

require __DIR__.'/__db_connect.php';

$page_name='buy_confirm';

if(! isset($_SESSION['user'])){
    header('Location: product_list.php');
    exit;
}

if(! isset($_SESSION['cart'])){
    header('Location: product_list.php');
    exit;
}


$user_id= $_SESSION['user']['id'];
$total_amount=0;

$keys = array_keys($_SESSION['cart']);
$sql = sprintf("SELECT * FROM product WHERE sid IN (%s)", implode(',', $keys));
$result = $mysqli->query($sql);
$cart_data = [];

while($row=$result->fetch_assoc()){
    $row['qty'] = $_SESSION['cart'][$row['sid']];
    $cart_data[$row['sid']] = $row;

    $total_amount += $row['qty'] * $row['price'];
}



$sql = "INSERT INTO `orders`(`member_sid`, `amount`, `order_date`) VALUES (?, ?, CURDATE())";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('ii',$user_id, $total_amount );
$stmt->execute();

$order_sid = $stmt->insert_id; // order primary key
$stmt->close();



$d_sql = "INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`,`name`) VALUES (?, ?, ?, ?,?)";
$d_stmt = $mysqli->prepare($d_sql);

foreach($keys as $p_sid){

    $d_stmt->bind_param("iiiis",
        $order_sid,
        $p_sid,
        $cart_data[$p_sid]['price'],
        $cart_data[$p_sid]['qty'],
        $cart_data[$p_sid]['name']

    );

    $d_stmt->execute();
}

$d_stmt->close();


unset($_SESSION['cart']);

?>

<?php include __DIR__.'/html-head.php' ?>
<?php include __DIR__.'/html-navbar.php' ?>
    <style>
        .container{
            height:500px;
        }
    </style>
    <div class="container">



        <div class="alert alert-primary" role="alert">
            感謝您的購買

            <!--
          <?//= $user_id. " : ". $total_amount. " : ". $stmt->insert_id ?>
            -->
        </div>


    </div>

    <script>
        setTimeout(function(){
            location.href = 'index_.php';
        }, 3000);
    </script>
<?php include __DIR__.'/html-foot.php' ?>