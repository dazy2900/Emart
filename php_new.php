
<?php
session_start(); 
	include"connect.php";
$buys = '';


if(isset($_POST['buys'])){
//echo"<script>alert('we clicked');</script>";
$ids = $_POST['ids'];

$sql="SELECT * FROM product WHERE id ='$ids';";
$result = mysqli_query( $conn, $sql);

$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$pname = $row['pname'];
$price = $row['price'];
$pic = $row['pics'];
 
$cartArray = array(
	$pname=>array(
	'id'=>$id,
	'pname'=>$pname,
	'price'=>$price,
	'quantity'=>1,
	'pic'=>$pic)
);
 if($cartArray){
	 
	 foreach ($cartArray as $key => $product){
	
	//echo"<script>alert('hell yeah $key');</script>";
	

}
 }
 else{
	 echo"<script>alert('nah1');</script>";
 }
if(empty($_SESSION["emart_cart"])) {
	//  echo"<script>alert('nah');</script>";
    $_SESSION["emart_cart"] = $cartArray;
    $status = "<div class='box' syle='color:red;'>Product is added to your cart!</div>";

}else{
	 //echo"<script>alert('nah');</script>";
    $array_keys = array_keys($_SESSION["emart_cart"]);
    if(in_array($pname, $array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
	
    }else {
    	// echo"<script>alert('nah2');</script>";
    $_SESSION["emart_cart"] = array_merge(
    $_SESSION["emart_cart"],
    $cartArray
    );
    $status = "<div class='box' style='color:red;'>Product is added to your cart!</div>";
	}
 
	}
	
	foreach ($cartArray as $key => $product){
	
	echo $product["pname"]." ".$key;
	echo $product["id"]; 
	echo $product["price"];

}

}

if(!empty($_SESSION["emart_cart"])) {
						$cart_count_refresh = count(array_keys($_SESSION["emart_cart"]));
								Echo $cart_count_refresh." Item(s)";
						 }





?>

		
