<!DOCTYPE>
<html>
<head>

<title>Add Product</title>
<!--required meta tags-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale, shrink-to-fit=no">

<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstarp/css/bootstrap.css.map">
		<link rel="stylesheet" href="bootstarp/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstarp/css/bootstrap.min.css.map">
		<link rel="stylesheet" href="bootstrap/js/bootstrap.js">
		<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">	
<style>
.mtable{
	background-color:white;  
	font: 16px  calibri;  

	border-radius:3px; 
	 
	color:silver; 
	margin:60px 0px 0px;   
	border:0px solid silver; 
	border-radius:20px;  
	width:100%;
}
.mytable{
	height:90px; 
	 
	width:80%;
	}
	
.mcontainer{
	border: 1px solid silver; 
	background-color:white; position:relative; 
	height:27em; 
	width:75%; 
	box-shadow: 2px 2px 2px 4px rgba(0, 0, 0, 0.0); 
	margin-top:18%; 
	border-radius:2px;
}
.validated:invalid {    border: 1px solid blue; }
.validated:valid {    background:#BDF0A8; }

}
.border{
	border:1px solid red;
}
.opacity{
	background-color:rgba(0,0,15,0.2); 
	height:100%; 
	left:0px; top:0px; 
	width:100%; border-radius:0px; position:absolute;
}

@media screen and (max-width:600px){
	.mcontainer{
		width:98%;
		margin-top:10%; 
	border-radius:3px;
	}
}
</style>
</head>
<body class='' style="background-image:; max-width:100%; max-height:100%; overflow-y:hidden; overflow-x:hidden;" >
<div align="" class="">
<nav class="navbar navbar-expand-lg navbar-light" style="background-image:; color:blue; font:20px agency fb; font-weight:; position:fixed; width:100%;
				  border-bottom:px solid silver; z-index:1;">
		<a class="navbar-brand" href="#"><img STYLE="position:relative; border:px solid red; margin:-10px 5px 5px; height:2.6em; width:110%;" src="image/assorted.png" ></a>
	
			
			
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
				<a class="nav-link callup" href ="transaction.php">Transactions</a>
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
<div class="contaner" style="padding-top:0em; border:px solid blue;"> 
<div class="display ">
<?php

if(isset($_POST['update'])) {
include"connect.php";
$select = $_POST['cart'];
$upname = $_POST['pname'];
$uinfo= $_POST['info'] ;
$uprice= $_POST['price'];
$dir = "image/" ;
$pix = $dir.basename($_FILES["pics"]["name"]); 
 move_uploaded_file($_FILES['pics']['tmp_name'],$pix);	
 
$query = "UPDATE $select SET pics ='$pix', pname = '$upname', info = '$uinfo',
 price = '$uprice'  WHERE pname = '$upname'"; 

 $uretval=mysqli_query($conn, $query);
	 if(! $uretval){
die('Sorry, Could Not Update :'. mysqli_error());
}
else {
	header("Location: admin.php") ;
	
	
}
	 mysqli_close($conn);
 
 }
 else{
?>


<div class="row" style=" height:100%;">
		<div class="col-sm-3"></div>

		<div class="col-sm-6" align='center'>
<div align="center" class="mcontainer">

<span align="center" style="font:26px centaur; height:100%; vertical-align:10px; top:35px; position:relative; color:grey;"> Update Products</span>

<form action="<?php $_PHP_SELF ?>" method="POST">
<table  border="0" align="center" class="mtable">
<tr><td align="center"><input type="text" name="id" placeholder='Product ID' style='height:40px; text-align:center; width:25%; color:grey; border:1px solid silver; border-radius:3px;'></td></tr>
<tr style=' height:8px; '></tr>
<tr style='height:40px;'><td align="center"><input type="file" placeholder='product image' name="pics" style='height:40px; width:75%; color:grey; border:1px solid silver; border-radius:3px;'></td></tr>
<tr style=' height:8px; '></tr>
<tr><td align="center"><textarea name="pname" placeholder='Product Name'  rows='3' style=' width:75%; color:grey; border:1px solid silver; border-radius:3px;'></textarea></td></tr>
<tr style=' height:8px; '></tr>
<tr><td align="center"><input type="text" name="price" placeholder='Price' style='height:40px; width:75%; color:grey; border:1px solid silver; border-radius:3px;'></td></tr>
<tr style=' height:18px; '></tr>
<tr><td align="center"><input type="submit" class='btn btn-info' name="update" value="Update" onclick="alert('Product Added Successfully');"
style="height:40px; font:22px Agency FB; border-radius:5px; color:white;  width:75%;" /></td></tr></table>

</form>
</div>

</div>
	<div class="col-sm-3"></div>
</div>
<?php
 }
?>
</div>
</body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>


</html>