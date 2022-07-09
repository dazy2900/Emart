<!DOCTYPE>
<html>
<head>
<title>Front page</title>
<!--meta tags-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initila-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstarp/css/bootstrap.css.map">
		<link rel="stylesheet" href="bootstarp/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstarp/css/bootstrap.min.css.map">
		<link rel="stylesheet" href="bootstrap/js/bootstrap.js">
		<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">	
		
<style>
.opacity{
background-color:rgba(0,0,15,0.7); 
height:100%; 
left:0px; top:0px; 
width:100%; border-radius:0px; position:fixed; z-index:-5;
}
</style>
</head>

<body style="background-image:url('image/plai.jpg'); " >
<div align="" class=""></div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; color:; font:20px agency fb; font-weight:; position:fixed; width:100%;
				  border-bottom:px solid silver; z-index:1;">
		<a class="navbar-brand" href="#"><img STYLE="position:relative; border:px solid red; margin:-10px 30px 0px 20px; height:60px; width:170px;" src="image/snklogo1.png" ></a>
	
			
			
 	<div align="" class="collapse justify-content-between navbar-collapse w-100 order-3 dual-collapse2" id="navbarNav" style="text-align:;">
		<ul class="navbar-nav" style="border:px solid red; margin:0px 15px 0px;">
			<li class="nav-item" > 
				<a class="nav-link" href ="#">Home</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link" href ="emart_admin.php" id="contact">Products</a>
			</li>
			<li class="nav-item dropdown"> 
				<a class="nav-link" id="product" href ="addproduct.php" >Add products </a>
			</li>
			<li class="nav-item dropdown"> 
				<a class="nav-link" id="product" href ="updateproduct.php" >Update products </a>
			</li>
			<li class="nav-item"> 
				<a  class="nav-link call" href ="orders.php">Orders</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link callup" href ="#">Transactions</a>
			</li>
		</ul>
		<ul class="navbar-nav" style="margin:0px 15px 0px; border:px solid blue;">
		
		<li class="nav-item"><a class="nav-link" href="#" style="border:2px solid red; border-radius:4px; color:red;">Sign Out</a></li>
		</ul>
	</div>
	<button type="buttom" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
			<span class="navbar-toggler-icon"></span>
			</button>
			
</nav>
<div class='container' style="padding-top:4em; border:px solid blue;">
<div align='center' style='font:30px ; background-color:; color:#5D84A3;'><h1>All Transactions</h1></div>
<?php

include 'connect.php';
$sql="SELECT * FROM transaction, profile 
WHERE transaction.user_data = profile.email";
	$retval = mysqli_query($conn, $sql);
echo"<form method='POST' action=''>
<table border='0' class='table-dark table' style='background-color:;  padding:5px; width:100%; color:; border-bottom: px solid silver; border-radius:2px; font:14px dosis;'>
     <tr style='border-bottom:;  color:;'>
	<td style='width:7%;'>Order ID</td>
	<td style='width:14%;'>Customer Name</td>
	<td style='width:17%;'>Contacts</td>
	<td style='width:20%;'>Address</td>
	<td style='width:9%; text-align:center;'>Time</td>
	<td colspan='2' style='width:23%;'><span style='margin-right:75px; '>Product</span><span style='margin-right:22px; '>Quantity</span><span style='margin-right:10px;'>Price</span></td>
	<td style='margin-right:px; width:8%;'>Total Price</span></td>
      </tr><table>";
while($row=mysqli_fetch_array($retval)){
	$email=$row['user_data'];
	$customer_name=$row['name'];
	$customer_tel=$row['tel'];
	$customer_address=$row['address'];
	$total_price=$row['total_price'];
	$session_data =$row['session_data'];
	$id =$row['id'];
	$time = $row['time'];
	$session_products = unserialize($session_data);
	echo"<table border='0' class ='table-hover' style='background-color:rgba(250,250,250,0.1); border-radius:10px; border-bottom:1px solid silver;  margin:px; padding:px;   '>
	<tr style=''>
	<td style='width:5%; text-align:center; margin:50px 90px;'>$id</td>
	<td style='width:15%;'>$customer_name</td>
	<td style='width:17%;'>
	<div style='' align=''>0$customer_tel </div>
	<div style='font-size:13;' align=''>$email </div>
	</td>
	<td style='width:20%; font-size:14;'>$customer_address</td>
	<td style='width:10%; text-align: center; font-size:14;'>$time</td>
	<td style='width:25%; padding:20px 0px ; margin:0px 0px;'>";
	foreach ($session_products as $key => $product){
	$pname= $product['pname'];
	$quantity = $product['quantity'];
	$price = $product['price'];
	$unit_price = $product['price'];
	echo"<table class='' style='font:12px dosis; color:#363636;'><tr><td style='width:160px;'>$pname</td><td style='width:40px;'>$quantity</td><td style='width:70px;'>$price</td></tr></table>";
}
echo"</td><td style='font-size:14px; width:6%;'>$total_price</td>
";
}
echo"</tr></table></form>";

?>
</div>

</div>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>


</html>