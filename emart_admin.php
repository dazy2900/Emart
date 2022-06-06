<!DOCTYPE>
<html>
<head>

<title>Admin Page</title>
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
.mytable{
	height:90px; 
	background-color:rgba(250,220,250,0.2);  
	box-shadow: 2px 2px 2px 4px rgba(0, 0, 0, 0.08); 
	border-radius:0px; 
	font: 14px  Franklin Gothic Medium Cond; 
	color:silver; 
	margin:0px 0px 5px;  
	width:80%;
	}
	.opacity{
	background-color:rgba(0,0,15,0.0); 
	height:%; 
	left:0px; top:0px; 
	width:100%; border-radius:0px; position:absolute;
}
	
	@media screen and (max-width:600px){
.mytable{
	height:70px;
	margin:0px 0px -5px;
	width:100%;
	}	
}
</style>
</head>
<body style="background-image:url('image/bac.jpg'); " >
<nav class="navbar navbar-expand-lg navbar-dark" style="background-image:url('image/plain.jpg'); color:blue; font:20px agency fb; font-weight:; position:fixed; width:100%;
				  border-bottom:1px solid silver; z-index:1;">
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
<div class="opacity ">
<div class="contaner" style="padding-top:5em; border:px solid blue;"> 


<div class="containe" style="border:px solid red; ">
<div class="row" STYLE="margin-top:40px;">
	<div class="col-sm-3" style="border:px solid blue; border-radius:60px;">
		<div align="center" style="margin-bottom:0px; margin-top:-46px; border-radius:5px; border:px solid blue; background-color:#365E99; position:fixed; width:25%; height:100%; ">		
			<div align="center" style="width:100%; font:15px orbitron; color:white; background-color:rgba(250,220,250,0.4); border-radius:4px; height:60px;"><span style="position:relative; color:#365E99; top:20px; border:px solid black;">CATEGORIES</span></div>
			
			<table style="border:px solid silver; font:20px agency fb; width:99%; ">
			<tr><td align="center" style="border:px solid silver; height:80px;">
			<form method="POST" action="" id="catf1"><input type="submit" name="cat1" id="cat1" style="width:100%; height:80px; border:none; margin-bottom:-20px; background-color:#365E99; position:relative;" value="cat1" class="border btn"></form></td></tr>
			<tr><td align="center" style="border:px solid silver; height:80px;">
			<form method="POST" action="" id="catf2"><input style="width:100%; height:80px; margin-bottom:-20px;  background-color:#365E99; position:relative;" class="border btn" type="submit" name="cat2" id="cat2" value="Cat2"></form></td></tr>
			
			<tr><td align="center" style="border:px solid silver; height:80px;">cat 3</td></tr>
			<tr><td align="center" style="border:px solid silver; height:80px;">cat 4</td></tr>
			<tr><td align="center" style="border:px solid silver; height:80px;">cat 5</td></tr>
			</table>
			
		</div>
	</div>
	<div class="col-sm-9" style="border:px solid red;">

<div align='center' class='container'>
<div align="center" class='bg-danger' style="width:90%;  margin-bottom:10px; background-color:; height:35px;"></div>
<?php 
error_reporting(5);
include'connect.php';




  $sql = "SELECT count(pname) FROM topdeal "; 
         $retval = mysqli_query(  $conn, $sql ); 
          
         if(! $retval ) { 
            die('Could not get data: ' . mysqli_error()); 
         } 
         $row = mysqli_fetch_array($retval, MYSQLI_NUM ); 
         $rec_count = $row[0]; 
          
       if( isset($_GET['page'] ) ) { 
         
			$page = $_GET['page'] + 1; 
            $offset = 6 * $page ; 
			
         }else { 
		 
            $page = 0; 
            $offset = 0;
			
         }
		 
		 

$sql = "SELECT * FROM topdeal LIMIT $offset, 6" ;

$retval= mysqli_query( $conn, $sql);

echo"<span style='color:grey; font:35px agency fb; text-transform:capitalize;'>$select </span>";

	while($row= mysqli_fetch_array($retval)){
		$pname=$row['pname'];
		$info=$row['info'];
		$price=$row['price'];
		$pic=$row['pics'];
		$id =$row['id'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		
		echo "<form action='' method='POST'><table border='0' class='mytable' align='center' style=''>";
		echo "<tr><td align='center' rowspan='2' style='height:75px;' ><img src='image/back.jpg' style='height:90%; border-radius:3px; border:px solid brown; width:85%;'></td>
		<td colspan='' style='color:#365E99; font-size:17px; text-transform:capitalize; padding-left:20px; height:60px; width:40%;'>$pname<input type='hidden' name='pname' value='$pname'></td><td align='center' style='color:grey'>Product ID:<b> $id</b></td></tr>
		<tr><td style='left:20px; color:grey; text-align:; padding-left:20px;' >#$price<input type='hidden' name='price' value='$price'></td><td>
		<input type='submit' name='add' class='btn btn-danger' value='Remove'   style='background-color:; font-family:agency fb; position:relative; border:; height:90%; width:90%; '></td></tr>
		</table></form>";
	}
echo"</td></tr></table>";

 if( $page > 0 ) { 
            $last = $page - 2; 
            echo "<a href = emart_admin.php?page=$last>Prev</a> |"; 
            echo "<a href = emart_admin.php?page=$page>Next</a>"; 
         }else if( $page == 0 ) { 
            echo "<a href = emart_admin.php?page=$page>Next</a>"; 
         }else if( $left_rec < $rec_limit ) { 
            $last = $page - 2; 
            echo "<a href = emart_admin.php?page=$last>Last</a>"; 
         }

mysqli_close($conn);
?>



</div>
</div>




</div>




</body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>

<html>