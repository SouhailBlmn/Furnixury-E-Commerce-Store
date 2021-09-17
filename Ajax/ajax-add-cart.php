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

$check=null;

foreach ($_SESSION["cart"] as &$item){
	if ($item['id']==$product_id) {
		$new_qty=$item['quantity']+$qty;
		$item['quantity']=$new_qty;
		$item['total_price'] += $total_price;
		$check=1;
	}
}
if ($check===null){
	$Cart_item=[
		'id'=>$product_id,
		'title'=>$product_name,
		'image'=>$image,
		'unit_price'=>$item_price,
		'total_price'=>$total_price,
		'quantity'=>$qty,
	];

	array_push($_SESSION["cart"],$Cart_item);
}

$Cart_Total=0;

foreach ($_SESSION["cart"] as $item){
	$Cart_Total+=$item['total_price'];
}

echo $Cart_Total;
