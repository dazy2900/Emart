<!DOCTYPE>
<?php session_start(); ?>
<html>
<head>
<title>Emart</title>
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

	<link rel='stylesheet' href="style.css">

<style>

</style>
<script></script>
		
</head>
<body style="" >
<nav class="navbar navbar-expand-lg navbar-dark nav_bar" style="">
		<a class="navbar-brand" href="#" ><img class="imgbrd" src="image/assorted.png" ></a>
	
			
			
 	<div align="" class="collapse justify-content-between navbar-collapse w-60 order-3 dual-collapse2 " id="navbarNav" style="width:120%;">
		<ul></ul>
		<ul align="center" class="navbar-nav ml-auto" style="">
			<li class="nav-item" > 
				<a class="nav-link" href ="#">Home</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link" href ="#footer" id="contact">Contacts</a>
			</li>
			<li class="nav-item dropdown"> 
				<a class="nav-link" id="product" href ="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>&nbsp Products </a>
				<span class="caret"></span>
				<div id="list" class='' style="display:none;">
        	
        	<ul class="dropdown-menu "  style="background-color:rgba(10, 10, 10, 0.9);  width:100px;">
        		<li class='nav-link' style="color:white;">
        			cat 1
        		</li>
        		<li class='nav-link' style="color:white;">
        			cat 2 
        		</li>
        		<li class='nav-link' style="color:white;">
        			cat 3
        		</li>
        		<li class='nav-link' style="color:white;">
        			cat 4
        		</li>
        		<li class='nav-link' style="color:white;">
        			cat 5
        		</li>
        		<li class='nav-link' style="color:white;">
        			cat 6
        		</li>
        	</ul>
        </div>
			</li>
			
			<li class="nav-item"> 
				<a style="border:2px solid silver; border-radius:4px; color:grey;" class="nav-link call" href ="#">Sign In</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link callup" href ="#">Sign Up</a>
			</li>
		</ul>
		<div class='nav1' align="right" style="">
				<a href="cart.php"><img src="image/cart3.png" style="height:60px; width:60px; padding-top:8px;"></a>
						<?php
						
						$cart_count_refresh = "";
						echo "<span id='cart_count_refresh'>" .$cart_count_refresh; ?> | Item(s)</span>
						
				<input class='search_input' type='text' style='height:30px; width:160px; border:none; border:1px solid silver; border-radius:3px; margin-left:15px; '>
				<button type='button' class='btn aqua-gradient search' style=' margin-top:-5px; background-color:aqua;'>
					<img src='image/search.png' style='height:17px;  width:17px; '>
				</button>
			</div>
		
	</div>
	<button type="buttom" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
			<span class="navbar-toggler-icon"></span>
			</button>
			
</nav>
<div class="white-div" style="padding-top:3.5em; border:1px solid blue;"> 
	<div class="row" style="border:px solid red; background-color:white;">
		<div class="col-sm-1"></div>
		<div class="col-sm-4"></div>
		<div class="col-sm-2"></div>
		<div class="col-sm-4" align="" style="border:px solid red; ">
		
			<div class='out' align="right" style=" ">
				<a href="cart.php"><img src="image/cart3.png" style="height:60px; width:58px; padding-top:8px;"></a>
						<?php
						if(!empty($_SESSION["emart_cart"])) {
						$cart_count = count(array_keys($_SESSION["emart_cart"]));
						echo "<span class='cart_count'style='font: 14px  Franklin Gothic Medium Cond; color:red;'>" .$cart_count; }else{echo"0"; }?> | Item(s)</span>
						
				<input type="text" style="height:30px; width:160px; border:none; border:1px solid silver; border-radius:3px; margin-left:15px; ">
				<button type="button" class="btn aqua-gradient" style=" margin-top:-5px; background-color:aqua;">
					<img src="image/search.png" style="height:17px;   width:17px; ">
				</button>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>


<!--barner-->
<div class=''style="position: relative; "class="contaner " >
	<div align="center" style='position: absolute; z-index: 3; width: 100%; margin-top: 240px; text-align:center; color:white;'>
		<div style="font: 16px centaur;"><h1>SNEAKS FOOTWARE</h1></div>
		<div style="font: 20px centaur;">The only shoe plug you need...</div>
		<div class='outline-danger btn btn-outline-danger' style="margin-top: 10px; width: 100px; border: 2px solid ; font: 20px centaur;">Explore</div>
	</div>
		<img src="image/nslider8.jpg" id='slide' style="border:px solid red; width:100%; height:105%;"> 
		<div class='opacity'> </div>
</div>

<div class="" style="">
<div align="center" class='large-text' style="font-family: Bahnschrift; margin-top: 10px; font-weight:bold;">
	<h2>Our Products</h2>
</div>
<div align="center" class="row " style="padding:0px;  margin:-10px 0px 0px;  background-color:white;  border:px solid red;">

	<div class = "col-sm-4" style="margin:30px 0px 30px;"><div style=""><img style="width:80px; height:70px; margin:20px;" src="image/icons1.png" >
		<div style="font:16px calibri; color:grey;">SNEAKERS</div>
		<div style="font:12px calibri; color:red; text-transform:uppercase;">NIKE,  ADDIDAS,  NAKED WOLF, GUCCI,  LV,  DIOR...</div>
	</div></div>
	<div class = "col-sm-4" style="margin:30px 0px 30px;"><div style=""><img style="width:80px; height:70px;  margin:20px;" src="image/icons2.png">
		<div style="font:16px calibri; text-transform:uppercase; color:grey;">PALM SLIPPERS</div>
		<div style="font:12px calibri; color:red;text-transform:uppercase;">NIKE,  ADDIDAS,  NAKED WOLF, GUCCI,  LOAFERS,  DIOR...</div>
	</div></div>
	<div class = "col-sm-4" style="margin:30px 0px 30px;"><div style=""><img style="width:80px; height:70px;  margin:20px;" src="image/icons3.png">
		<div style="font:16px calibri; text-transform:uppercase; color:grey;">OFFICE SHOES</div>
		<div style="font:12px calibri; color:red;text-transform:uppercase;">NIKE,  ADDIDAS,  SALVADOR VERAGAMO, GUCCI,  LV,  PERRY CARDIN...</div></div></div>

</div></div>

<!--New row-->
<div class='parallax'>
	<div class='inner_parallex' style=''> 
	  <div class='' style=''>Life isn't perfert but your shoes can be, make the right choice and let's get you the best <br>pair of shoes you'd ever buy </div>
	  <div align='center' class='outline-danger btn btn-danger parallex_btn' style="">Explore</div>
	  </div>
  <div class='' style='background-color:rgba(50,50,68,0.5); height: 50%; width: 100%;'></div>
</div>


<!-- product row-->
<div class="container bl" style=" margin-top:20px; padding-bottom:20px; ;padding-top:1px; border-radius:3px; background-color:white;">
	<div>
		<ul class="nav nav-tabs">
			<li class='nav-item'>
				<a class="nav-link active nav-fill" aria-current="page" href='#'>Active</a>
			</li>
			<li class='nav-item'>
				<a class="nav-link" href='#'>Active</a>
			</li>
			<li class='nav-item'>
				<a class="nav-link" href='#'>Active</a>
			</li>
			<li class='nav-item'>
				<a class="nav-link" href='#'>Active</a>
			</li>
	</div>
<div class="row" STYLE="margin-top:40px;">
	<div class="col-sm-3" style="border:px solid blue;">
		<div align="center">		
			<div align="center" class='cat_title' style="">
				<span style="position:relative; top:7px; border:px solid black;">CATEGORIES</span></div>
			
			<table style="border:1px solid silver; font:20px agency fb; width:99%; ">
			<tr><td align="center" style="border:1px solid silver; height:80px;">
			<form method="POST" action="" id="catf1"><input type="submit" name="sneakers" id="sneakers" style="" value="Sneakers" class="cat_input border btn"></form></td></tr>

			<tr><td align="center" style="border:1px solid silver; height:80px;">
			<form method="POST" action="" id="catf2"><input style="" class=" cat_input border btn" type="submit" name="palms" id="palms" value="Palms" ></form></td></tr>
				

			<tr><td align="center" style="border:1px solid silver; height:80px;">
			<form method="POST" action="" id="catf3"><input style="" class="cat_input border btn" type="submit" name="shoes" id="shoes" value="Shoes" ></form></td></tr>
			
			</table>
			
		</div>
	</div>
	<div class="col-sm-9" style="border:px solid red;">
		<div align="center" class="desktop">
			<div align="center"  style="width:100%; background-color:#D6345B; height:35px;"></div>
		<div style="margin-top:20; width:100%; " class="display">	
<?php 
error_reporting(5);
include'connect.php';




  $sql = "SELECT count(pname) FROM product "; 
         $retval = mysqli_query( $conn, $sql ); 
          
         if(! $retval ) { 
            die('Could not get data: ' .  mysqli_error()); 
         } 
         $row = mysqli_fetch_array($retval, MYSQLI_NUM ); 
         $rec_count = $row[0]; 
          
       if( isset($_GET['page'] ) ) { 
         
			$page = $_GET['page'] + 1; 
            $offset = 9 * $page ; 
			
         }else { 
		 
            $page = 0; 
            $offset = 0;
			
         }
		 
		 

$sql = "SELECT * FROM product ORDER BY RAND() LIMIT $offset, 9 " ;

$retval= mysqli_query($conn, $sql);
echo"<table border='0' align='center' style='width:100%;'>";
$i=0;
echo"<span style='color:grey; font:35px agency fb; text-transform:capitalize;'>$select </span>";

	while($row= mysqli_fetch_array($retval)){
		$pname=$row['pname'];
		$id=$row['id'];
		$price=$row['price'];
		$pic=$row['pics'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		if($i % 3 == 0){
		echo "<tr align='center' ><td ><form action='' method='POST' class='display-form'><table border='0'class='product_table' style=''>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px; max-height:225px; max-width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buy' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br /></td>";
	}else{
	echo "<td ><form action='' method='POST' class='display-form'><table border='0' class='product_table'  style=''>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px; max-height:225px; max-width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buy' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br/></td>";
	}
	$i++;
	}
echo"</td></tr></table>";

//working

 if( $page > 0 ) { 
            $last = $page - 2; 
            echo "<a href = emart_lp.php?page=$last>Prev</a> |"; 
            echo "<a href = emart_lp.php?page=$page>Next</a>"; 
         }else if( $page == 0 ) { 
            echo "<a href = emart_lp.php?page=$page>Next</a>"; 
         }else if( $left_rec < $rec_limit ) { 
            $last = $page - 2; 
            echo "<a href = emart_lp.php?page=$last>Last</a>"; 
         }

		 
		 
		 

include('connect.php');


foreach ($cartArray as $key => $product){
	
	echo $product["pname"]." ".$key;
	echo $product["id"]; 
	echo $product["price"];

}

		 
	

					

		 
		 
		 
mysqli_close($conn);
?>	
<div style="clear:both;"></div>

<div class="message_box" name='message_box' style="margin:10px 0px;">
<?php echo $status; ?>
</div>		
</div>
		</div>
	</div>
</div>
</div>

<!--mobile view section-->
<div class="mobile-div">
<div class="container mview">


<?php 
error_reporting(5);
include'connect.php';




  $sql = "SELECT count(pname) FROM topdeal "; 
         $retval = mysqli_query( $conn, $sql ); 
          
         if(! $retval ) { 
            die('Could not get data: ' .  mysqli_error()); 
         } 
         $row = mysqli_fetch_array($retval, MYSQLI_NUM ); 
         $rec_count = $row[0]; 
          
       if( isset($_GET['page'] ) ) { 
         
			$page = $_GET['page'] + 1; 
            $offset = 9 * $page ; 
			
         }else { 
		 
            $page = 0; 
            $offset = 0;
			
         }
		 

$sql = "SELECT * FROM desktop LIMIT $offset, 9" ;

$retval= mysqli_query($conn, $sql);

echo"<span style='color:grey; font:35px agency fb; text-transform:capitalize;'>$select </span>";

	while($row= mysqli_fetch_array($retval)){
		$pname=$row['pname'];
		$info=$row['info'];
		$price=$row['price'];
		$pic=$row['pics'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		
		echo "<form action='' method='POST'><table border='0' align='center' style='height:80px; background-color:white;  box-shadow: 2px 2px 2px 4px rgba(0, 0, 0, 0.1); border-radius:3px; font: 14px  Franklin Gothic Medium Cond; color:silver; margin:0px 0px -10px;  width:100%;'>";
		echo "<tr><td align='center' rowspan='2' style='height:75px;' ><img src='image/back.jpg' style='height:90%; border-radius:3px; border:px solid brown; width:85%;'></td>
		<td colspan='2' style='color:#7B7AF1; font-size:17px; text-transform:capitalize; padding-left:20px; height:60px; width:55%;'>$pname<input type='hidden' name='pname' value='$pname'></td></tr>
		<tr><td style='left:20px; color:grey; text-align:; padding-left:20px;' >#$price<input type='hidden' name='price' value='$price'></td>
		<button type='submit' name='add'  style='background-color:rgba(0, 0, 0, 0.0); position:absolute; border:none; height:110px; width:91%; '></button></tr>
		</table></form>";
	}
echo"</td></tr></table>";

 if( $page > 0 ) { 
            $last = $page - 2; 
            echo "<a href = emart_lp.php?page=$last>Prev</a> |"; 
            echo "<a href = emart_lp.php?page=$page>Next</a>"; 
         }else if( $page == 0 ) { 
            echo "<a href = emart_lp.php?page=$page>Next</a>"; 
         }else if( $left_rec < $rec_limit ) { 
            $last = $page - 2; 
            echo "<a href = emart_lp.php?page=$last>Last</a>"; 
         }

		 
		 
		 
		 
		 
mysqli_close($conn);
?>

</div>
</div>

<!--New row-->

<div class="container bl" style=" margin-top:20px;  padding:1px;  border-radius:3px;">

</div> 

<!--New row-->
<div style="width:100%; margin-top:30px;  border:1px solid white; background-color:white;" class="">

<div class="container bl" style="background-color:white; border:2px solid grey; margin-top:50px; margin-buttom:0px; height:%; border-radius:10px;">
<div class="row" style='margin-top:60px;'>
<div class="col-sm-6">
<div align="" class="">
	<div style='font:250% dosis; color:#363636; text-align:left; margin: 20px 0px -7px 40px;'><h2>About Us</h2></div>
		<div align='left' style="background-color: red; margin:0px 0px 15px 40px; border-radius:3px; width:130px; height: 3px; "></div>
		<div style ='width:80%; font-size:13px; margin-left:40px;'>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</div>
</div>


</div>
<div class="col-sm-6">
<div align="center">
	<img src="image/snklogoban.jpg" style="border:px solid red; border:radius:9px; padding:5px; border-radius:5px; height:80%; width:80%;"

</div>
</div>
</div>
</div>



<!--New row-->
<div class="row">
<div class="col-sm-6">
	<div align="center">
	<img src="image/gift.jpg" style="border:px solid red; height:80%; width:70%;">
	</div>

</div>
<div class="col-sm-6">
<div align="">
<span style="font:200% dosis; margin-left:40px;' color:#363636;">Our Delivery Service</span>
</div>
<div align='left' style="background-color: red; margin:0px 0px 15px 40px; border-radius:3px; width:280px; height: 3px; "></div>
		<div style ='width:80%; font-size:13px; margin-left:40px;'>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</div>
</div>
</div>
</div>

</div>
<div style="height:50px;"></div>
</div>

												<!--FOOTER-->
<footer id="footer" class='container-fluid' style="background-color:#101021; width: 100%; color:grey; border-bottom:2px solid white; margin-top:10px; ">


	<div class="row" style=" padding-top:60px; padding-bottom:100px; border:0px solid red;">

		

		<div align="center" style="border:0px solid silver; padding-top:40px;" class = "col-sm-4">
			<div style="text-align:left; width:50%;"><span style="font:bold 25px agency fb;">Explore</span>
				<ul style="text-align:; text-decoration:none; color:grey; font-family:dosis;" class="nav navbar-nav">
				<div class=""> <a class="" href ="#">Home</a></div>
				<div class=""> <a class="" href ="contact.php">Contacts</a></div>
				<div class=""> <a style="" class="" href ="signin.php"> Sign In</a></div>
				<div class=""> <a class="" href ="register.php"> Sign Up</a></div>
				</ul>
			</div>
			<br>
				<div style="text-align:left; width:50%;"><span style="font:bold 25px agency fb;">Product & Services</span>
					<span style="color:grey; font-family:dosis;"><br>Monitor<br>Laptop<br>Printer<br>Delivery Service</span>
				</div>
		</div>

		<div align="center" style="padding-top:40px; " class = "col-sm-4 brder"><div align="" class="brder" style="text-align:left; width:50%;"><span style="font:bold 25px agency fb;">Contact</span><br /><span style="color:red; font:bold 20px agency fb;">Nigeria</span>
			<br />Assortedfoods@yahoo.com
			<br />
			<br />
			<span style="position:relative; padding-top:50; font:bold 25px agency fb; margin-top:60px;">Connect With Us:</span><br>
			<br><img src="image/f.jpg" style='height:40px; width:40px;'> <img src="image/logo5.png" style='height:40px; width:40px;'> 
			<img src="image/logoi1.png" style='height:40px; width:40px;'>  <img src="image/logow2.png" style='height:40px; width:40px;'>
			</div>
		</div>

		<div align="center" style="border:0px solid silver; padding-top:40px;" class= "col-sm-4">
				<div class="border" align="center" style="padding:20px; border-radius:2px; color:grey; width:90%;">
			<div class="bordr" style="text-align:left; width:90%;">
				 
				<form>
				<span style="font:bold 25px agency fb;">Feedback</span><br><br>
				<input type="email" id="emai" placeholder="Enter E-mail address" style="background-color:#101021;  border:none; color:white; font-size:16px; border:1px solid white; border-radius:4px; height:35px; width:100%;">
				<br>
				<br>
				<textarea rows='5' style="width:100%; font-size:16px; background-color:#101021;  border:none; color:white; border:1px solid white; border-radius:4px;" placeholder="Your message..."></textarea>
				 <div align="right"><input align="center" type="submit" class="btn" value="Done" onclick="alert('Product Updated Successful');"  style="border:2px solid white; margin-top:5px; color:white; text-align:right;"></div>
				</form>
				</div>
			</div>
			
		</div>

	</div>


</footer>
<div align="center" style="background-color:black; padding:2px; font: 15px glegoo; color:grey;" >Copyright &copy2018 All rights reserved</div>

<div id='hide-pops'  style=''></div>
<div id='contact-static'   align='center'>
	<div id='display-phone'  style='font-size:90%; display:none; background:rgba(90,220,220,0.8); border-radius:10px; padding-left: 2px; padding-right:2px; padding-bottom: 1px; padding-top: 1px;' >
		<div><img src='image/logow2.png' 		 style='width:1.7vw;'>+7 911 998 18 94</div>
		<div><img src='image/smartphone-call.png' style='width:1.7vw;'>+234 8062864511</div>
			
	</div>
	<img src='image/iphone.png'  id='phone-toggle' style="width:6vw;">
</div>




<!--SIGN IN-->
<div class="signin" style="position:relative; z-index:5;">
<?php
if(isset($_POST['signin'])){
include"connect.php";
$email = $_POST['email'];
$password =$_POST['password'];
$name = $_POST['name'];
if ($email == 'email@gmail.com' AND $password == 'admin001') {
	
header("Location:bLpage.php") ;}
else{
$sql = "SELECT * FROM profile WHERE email = '$email' AND password = '$password'";


	$retval = mysqli_query($conn, $sql);
 
 	 $count = mysqli_num_rows($retval);
	 if($count == 1)
	 {
		 $_SESSION['name'] = $name;
	echo "<script>alert('YOU ARE LOGED IN');</script>";
	header('location:bLpage.php');
	 }
	 	 
	else{
		 echo "<script>alert('Wrong Name/password');</script>";
		 header('location:b_signin.php');
		 }
	 
	 mysqli_close($conn);
}
 }
 
 else{
?>	 


<div align="center" class="opacity" style="position:fixed;  z-index:5;">

	<div class="row" style=" height:100%; border:1px solid red;">
		<div class="col-sm-2"></div>

		<div class="col-sm-8">
			<div align="center" class="mycontainer">
				
					<span align="center" style="font:35px centaur;  vertical-align:20px; top:55px; position:relative; color:grey;"> Sign In</span><br/>
				<span align="right" class="x" style="position:relative; border:px solid red; color:red; font:20px arial; cursor:pointer; left:35%; top:5%; padding:5px;">x</span>
				<form method="POST" action="" id="form1" >
				<table  align="center" class="mtable">

					<tr style=' height:45px;'><td align="CENTER"><input class="signin_input validated" id="email" required type="email" placeholder='E-Mail' name="emails"  style=''></td></tr>
					<tr style=' height:2.5em; '></tr>
					<tr><td align="CENTER"><input required type="password" class='signin_input ' name="password" id="pass" placeholder='Password' style=''></td></tr>
					<tr style=' height:10px; '></tr>
					<tr  style=' height:45px; '><td align="CENTER" class='text-primary' style='color:skyblue;  font-size:15px;'> Forgot password?</td></tr><br />
					<tr style=' height:10px; '><td align='center'><p class="message"></p></td></tr>
					
					<tr><td colspan="2" align='center' ><input style="border:px solid; width:75%;"  id="submit" type="submit" name="submit" value="Sign In" 
					class="btn btn-outline-primary "> </td></tr>
					<tr style=' height:20px; '></tr>
					
					<tr><td colspan="2" align='center' style="font-size:13px;">Not yet a customer, <a href="#" id="signinup">Sign Up</a></td></tr>
				</table></form>
			</div>
		</div>
   </div>
		<div class="col-sm-2"></div>
	</div>

</div>
<!--END OF SIGNIN-->
<!--SIGNUP-->
<div class="signup">
<?php
if(isset($_POST['add'])){
include'connect.php';

$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$email = $_POST['email'];
$password =$_POST['password'];

$sql = "INSERT INTO profile(name, tel, email, address, password) value('$name', '$tel', '$email', '$address', '$password')";
echo"<script>alert('$name, $tel, $address, $email, $password');</script>";		

	$retval = mysqli_query($conn, $sql);
if($retval){
die('Sorry, Could Not Sign Up :'. mysqli_error());
echo"<script>alert('hell yeah');</script>";
}

if(! $retval){
die('Sorry, Could Not Sign Up :'. mysqli_error());
echo"<script>alert('hell no');</script>";
}

header('location:bLpage.php');
mysqli_close($conn);
}else{
?>


<div align="center" class="opacity" style="z-index:5;">

 <div class="row" style=" height:100%;">
		<div class="col-sm-2"></div>

		<div class="col-sm-8">
<div align="center" class="mcontainer">

<span align="center" style="font:30px centaur; height:100%; vertical-align:0px; top:15px; position:relative; color:grey;"> SIGN UP</span><BR>
<span align="right" class="xp" style="position:relative; border:0px solid red; color:red; font:25px arial; cursor:pointer; left:34%; bottom:3%; padding:5px;">x</span>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table  border="0" align="center" class="mtable">

<tr  style=' height:30px; '><td class='signup_spacing' align="center"><input type="text" placeholder='Full Name' class="signup_input validated" id="mail" required autofocus name="name" style=''></td>
</tr>

<tr  style=' height:30px; '><td class='signup_spacing' align="center"><input class="signup_input validated" id="tel" required type="tel" placeholder='Phone Number' name="tel" style=''>
</tr>

<tr style=' height:30px; padding-bottom: 50px; '><td class='signup_spacing' align="center" ><input class="signup_input validated" id="semail" required type="email" placeholder='E-Mail' name="email" style=''></td>
</tr>

<tr  style=' height:30px; '><td class='signup_spacing' align="center"><input class="signup_input validated" id="country" required type="text" placeholder='Address' name="address" style=''></td>
</tr>


<tr><td class='signup_spacing' align="center"><input class="signup_input validated" id="pass" required type="password" name="password" placeholder='Password' style=''></td>
</tr>

<tr style=' height:8px; '></tr>



<tr style=' height:8px; '><td align="center"><p class="message"></p></td></tr>
<tr><td colspan="2" align='center'><input style="border:px solid; width:75%;"  id="submit" type="submit" name="submit" value="Sign Up" 
					class="btn btn-outline-primary "> </td></tr>
<tr  style=' height:30px; '><td colspan="2" align='center' style="font-size:13px;">Already a customer, <a href="#" id="signupin">Log In</a></td></tr>
</table></form>
</div>
</div>
<div class="col-sm-2"></div>
</div>
</div>



<?php 
}
?>
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
		


	
	
	
	
	
	

<script>

$(document).ready(function(){
	
	$('#cart_count_refresh').load('php_new.php');
	setInterval(function(){
	$('#cart_count_refresh').load('php_new.php');
	}, 1000);
	
	$('.call').on('click',function(){
	$('.signin').show();	
	});
	$('.x').on('click',function(){
	$('.signin').hide();	
	});
	
	$('.callup').on('click',function(){
	$('.signup').show();	
	});
	$('.xp').on('click',function(){
	$('.signup').hide();	
	});
	$('#signinup').on('click', function(){
		$('.signin').hide();
		$('.signup').show();
	});
	$('#signupin').on('click', function(){
		$('.signup').hide();
		$('.signin').show();
	});
			$('#contact').click(function(){
        	$('html, body').animate({
    scrollTop: $("#footer").offset().top
}, 2000);
$('#display-phone').fadeIn();
});

        		$('#product').click(function(){
        		$('#list').fadeIn('slow');
					
	});

       		
        		$('#phone-toggle').click(function(){
        			$('#display-phone').fadeIn();
        			$('#hide-pops').show();
        		});
				
				$('#hide-pops').click(function(){
        			$('#show-services').hide();
        			$('#hide-pops').hide();
        			$('#display-phone').hide();
        		});

		$(".search").click(function(){
			
			var search_input = $(".search_input").val();
			var search = $(".search").val();
			
			$(".display").load("php.php", {
				search_input : search_input,
				search : search
			}, function(response, status, xhr){
				//alert('load');
			});
		});
		$("#form1").submit(function(event){
		
		event.preventDefault();
		var email= $("#email").val();
		var pass = $("#pass").val();
		var submit = $("#submit").val();
		$(".message").load("php.php",{
			email: email,
			pass: pass,
			submit: submit
		
		});
	});
//working
$(document).on('click', '.buy', function(event){
	
		event.preventDefault();
		
		var id = this.id;
		var buy = $(".buy").val();

		$(".message_box").load("php.php",{
			id: id,
			buy: buy
		}, function(response, status, xhr){
			
			if(status == "error"){
				var msg = "sorry there was an error: ";
				alert(msg);
				
				$("#error").html(msg + xhr.status + " " + xhr.statusText);
			}else{
				//alert('the load works');
			}
				
		});

}); 

	$("#catf1").click(function(event){
	
		event.preventDefault();
		var sneakers = $("#sneakers").val();
		
		$(".display, .mview").load("php.php",{
			sneakers: sneakers
			
		});
	});
	$(document).on('submit','#catf2',function(event){ 

		event.preventDefault();
		
		var palms = $("#palms").val();
		
		$(".display, .mview").load("php.php",{
			palms: palms,
						
		});
	});
	$("#catf3").click(function(event){

		event.preventDefault();
		
		var shoes = $("#shoes").val();
		$(".display, .mview").load("php.php",{
			shoes: shoes
		})
	});
	
	$(document).scroll(function(){
			var scroll_height =$(document).scrollTop();
			
			
			if($(window).width() > 800){
					if(scroll_height > 500){
						
						$('.navbar').addClass('bg-dark');
						
			
					}else{
						$('.navbar').removeClass('bg-dark').fadeIn('slow');
						
			
					}
			}else{
				
				if(scroll_height > 210){
						
						$('#navbar-dark').css("background","white");
						$('#navbar-dark').removeClass('navbar-dark').addClass('navbar-light');
			
					}else{
						$('#navbar-dark').removeClass('navbar-light').addClass('navbar-dark');
						$('#navbar-dark').css("background","linear-gradient(to bottom, rgba(0,20,50,0.4), #285E78)");
						
			
					}
			}
			
	});
	
	
});


   //var cart1 = document.getElementById("CartCount1");
//alert(cart1);

function CartCount(){
setInterval( function(){

var cart = document.getElementById('CartCount1');
alert(cart);
}, 2000);
alert('worked22');
}

//CartCount();

var count =0;
function slider(){
count++;
if(count>6){
count=0;
}
var comp = document.getElementById('slide');

comp.src='image/nslider'+count+'.jpg';
setTimeout(slider,5000);

}
//slider();


</script>
</html>