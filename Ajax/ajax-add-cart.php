<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$qty=(int)$_POST['qty'];
$item_price=(float)$_POST['price'];
$image=$_POST['image'];
$product_id=$_POST['id'];
$product_name=$_POST['title'];
$total_price=$item_price*$qty;

$Cart_item=[
	'id'=>$product_id,
	'title'=>$product_name,
	'image'=>$image,
	'unit_price'=>$item_price,
	'total_price'=>$total_price,
	'quantity'=>$qty,
];

if (isset($_SESSION["cart"])){
	array_push($_SESSION["cart"],$Cart_item);

}
else{
	$_SESSION["cart"]=array();
	array_push($_SESSION["cart"],$Cart_item);
}

$Cart_Total=0;

foreach ($_SESSION["cart"] as $item){
	$Cart_Total+=$item['total_price'];
}

echo $Cart_Total;