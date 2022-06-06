<?php
session_start();
$status="";
$sign_stat ='0';
if(isset($_SESSION['session_name'])){
	$sign_stat ='1';
}
echo"<input type='hidden' value='$sign_stat' id='log_chk'>";

if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["emart_cart"])) {
    foreach($_SESSION["emart_cart"] as $key => $value) {
      if($_POST["pname"] == $key){
      unset($_SESSION["emart_cart"][$key]);
      $status = "<span class='box' style='color:red; border:px solid blue;'>
      Product is removed from your cart!</span>";
      }
      if(empty($_SESSION["emart_cart"]))
      unset($_SESSION["emart_cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["emart_cart"] as &$value){
    if($value['pname'] === $_POST["pname"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}

?>
<!DOCTYPE>
<html>

<head>
<title>Cart</title>
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
::-webkit-scrollbar{
	width: 5px;
}
::-webkit-scrollbar-track{
	background-color: white;
}
::-webkit-scrollbar-thumb{
	background: silver;
	border-radius: 5px;
}
::-webkit-scrollbar-thumb:hover{
	background: grey;
}
.border{
	border:1px solid red;
}
.opacity{
	background-color:rgba(1,1,3,0.9); 
	height:100%; 
	left:0px; top:0px; 
	width:100%; border-radius:0px; 
	position:fixed;
}
.mcontainer{
	border:solid 1px silver; 
	background-color:white; 
	position:relative; 
	height:31em; 
	width:70%; 
	box-shadow: 2px 2px 2px 4px rgba(0, 0, 0, 0.3); 
	margin-top:8%; 
	border-radius:4px;
}
.validated:invalid {    border: 1px solid blue; }
.validated:valid {    background:#BDF0A8; }

.mycontainer{
	border:solid 0px silver; 
	background-color:white; 
	background-repeat: repeat; 
	position:relative; 
	height:27em; 
	width:60%; 
	margin-top:10%; 
	border-radius:3px;
}
.mtable{
	position:relative; 
	padding:0px; 
	left:0px; 
	height=100%; 
	top:10px; 
	border:0px solid silver; 
	border-radius:20px;  
	width:100%;
}
.button{
	height:45px; 
font:20px Agency FB;  
border:none; 
border-radius:10px; 
border-bottom-color:1px solid red;  
border-right-color:rgba(200,220,270,1); 
color:white;  
background-color:rgba(0,220,270,0.9); 
text-decoration:none; 
width:50%;
}
.error{
	color:red;
}
.signin{
	display:none;
	z-index:5;
}
.signup{
	display:none;
	z-index:5;
}
li{
	margin:15px 4px 0px;
	
}



</style>


		
</head>
<body style="background-color:#fdfdfd; background-image:url(); max-width:100%; overflow-x:hidden; " >

<nav class="navbar navbar-expand-lg  navbar-light" style=" background-color:#FDFDFF; font:20px agency fb; font-weight:; position:fixed; width:100%;
				  border-bottom:px solid silver; z-index:1;">
		<a class="navbar-brand" href="#"><img STYLE="position:relative; border:px solid red; margin:-10px 5px 5px; height:2.4em; width:110%;" src="image/assorted.png" ></a>
	
			
			
 	<div align="" class="collapse justify-content-between navbar-collapse w-100 order-3 dual-collapse2" id="navbarNav" style="text-align:;">
		<ul class="navbar-nav" style="border:px solid red; margin:0px 15px 0px;">
			<li class="nav-item" > 
				<a class="nav-link" href ="#">Home</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link" href ="#footer" id="contact">Contacts</a>
			</li>
			<li class="nav-item dropdown"> 
				<a class="nav-link" id="product" href ="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>&nbsp Products </a>
			</li>
			
			<li class="nav-item"> 
				<a style="border:2px solid silver; border-radius:4px; color:silver;" class="nav-link call" href ="#">Sign In</a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link callup" href ="#">Sign Up</a>
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


<div class="container" style="padding-top:4.5em; color: silver; height:98%; border:px solid blue;"> 

<div align='center' style="border:px solid grey; margin-bottom: -10px;"><h2>Cart</h2></div>

<table border='0' class="table table-borderless" style="border-bottom:1px solid silver; background-color: ; color: grey; width:100%;"><tr>
 <td style="width:54%; border: px solid blue;">Product</td>
 <td style="width:10%;">Quantity</td>
 <td style="width:12%;">Price</td>
 <td style="width:13%;">Product Total</td>
 <td style="width:11%;">Remove</td>
 </tr>
</table>

<div class="cart" style="background-color:; border-radius:0px; margin-top:0px; width:100%; max-height:69%; min-height:65%; position:relative; border: 0px solid black; overflow-x:auto;">

<?php
if(isset($_SESSION["emart_cart"])){
    $total_price = 0;
		
foreach ($_SESSION["emart_cart"] as $product){

    $pics = $product["pic"];
?>
<table align='center' border='0' class="table table-hover table-borderless" style="border:none; width:100%; height:100px; color: grey;  margin-bottom:8px;">
	<tr align='center'  style='height: px;'><td style='border:px solid black; width:15%; '><?php echo"<img style='height:120px; width:140px; margin:px;' src='$pics'/>";?></td>

	<td align='left'  style='border:px solid blue; border-bottom: 1px solid silver; width:40%;'><?php echo $product["pname"]; ?></td>

	<td align='left' style='padding-top: 45px; border-bottom: 1px solid silver; width: 10%;' >
	 <form method='post' action=''>
	 <input type='hidden' name='pname' value="<?php echo $product["pname"]; ?>" />
	 <input type='hidden' name='action' value="change" />
	 <select name='quantity' id='quantity' class='quantity' onChange="this.form.submit()" style="line-height:13px; border:none; color: grey;  border-radius:4px;  -webkit-appearance:none; width:50px; -moz-appearance:none; box-sizing:border-box; box-shadow: 0 1px 0 2px rgba(0,0,0,0.1); padding:10px; cursor:pointer; linear-gradient:to bottom, white 10%, blue 100%; z-index:5;">
	 <option value="1" <?php if($product["quantity"]==1) echo "selected";?> >
		 1 </option>
	 <option value="2" <?php if($product["quantity"]==2) echo "selected";?>
		>2</option>
	 <option value="3" <?php if($product["quantity"]==3) echo "selected";?>
		>3</option>
	 <option value="4" <?php if($product["quantity"]==4) echo "selected";?>
		>4</option>
	 <option value="5" <?php if($product["quantity"]==5) echo "selected";?>
		>5</option>

	 </select>

	 <div style="position:relative; bottom:24px; left:27px;"><img src ="image/caret.png" style="width:15px; height:15px;	cursor:pointer;"></div>
	 </form>
	</td>
	
	<td style='padding-top: 45px; width: 12%; border-bottom: 1px solid silver;'><?php echo "$".$product["price"]; ?></td>
	
	<td style='padding-top: 45px; width: 13%; border-bottom: 1px solid silver;'><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
	<td style='border:px solid grey; width: 10%;  padding-top: 45px;'>
	  <form method='post' action=''>
	    <input type='hidden' name='pname' value="<?php echo $product["pname"]; ?>" />
	    <input type='hidden' name='action' value="remove" />
	    <input type='submit' value="  x  " class='remove outline-secondary btn-outline-secondary' style="height:30px; font:16px agency fb; width:90 px; margin-top:0px; margin-bottom:-14px; background-color: ; border:2px solid grey; border-radius:3px;">
	  </form>
	</td>
  </tr>
</table>

	<?php
	$total_price += ($product["price"]*$product["quantity"]);
	}
	?>
	
</div>	
<table  style='color:grey; width: 100%; border:px solid grey;'><tr>
<td class="message_box" style="margin:px 0px;">
<?php echo $status; ?>
</td>
<td align='right'><H5 align='right'>TOTAL: <?php echo "$".$total_price; ?></H5></td></tr>
</table>	
<div style="margin-bottom:500px; border: px solid blue;">
	<form method="POST" action="" id='check_out'>
	<input type='hidden' name='total_price' value="<?php echo $total_price; ?>" id='total_price'/>
	<input type= "submit" name='check_out' value="CHECK OUT" style="width:100%; border:px solid green; " class="btn outline-secondary btn-outline-secondary" id=' '>
	</form>
</div>
	
  <?php
  /*foreach ($_SESSION["emart_cart"] as $product){
	if(isset($_POST['submit'])){
	include "connect.php";
	$pname= $product['pname'];
	$quantity = $product['quantity'];
	$price = $product['price'];
	$unit_price = $product['price'];
	
	$sql = "INSERT INTO transaction (product_name, quantity, unit_price, total) 
	VALUES('$pname', '$quantity', '$price', '$total_price')";
	$retval = mysqli_query($conn, $sql);
		if($query){
			unset($_SESSION["emart_cart"]);
			echo"<script>alert('purchased')</script>";
		}
	}
  }*/
  /*if(isset($_SESSION['session_name'])){
  if(isset($_POST['check_out'])){
	
	include "connect.php";
	$session_data=$_SESSION['emart_cart'];
	$serialize = serialize($session_data);
	$sql="INSERT INTO serialize_cart (session_data) VALUE('$session_data')";
	$retval = mysqli_query($conn, $sql);
		if($query){
			unset($_SESSION["emart_cart"]);
			echo"<script>alert('purchased')</script>";
		
		  
		}
	}
	}else{
	
  }*/
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
	
	echo"	
<div class='signin' >";
	if(isset($_POST['signin'])){
	include"connect.php";
	$email = $_POST['email'];
	$password =$_POST['password'];
	$name = $_POST['name'];
	if ($email == 'email@gmail.com' AND $password == 'admin001') {
		
	header("Location:bLpage.php") ;}
	else{
		echo"<script>alert('$session_name');</script>";
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
		 

	echo"
	<div align='center' class='opacity' style='position:fixed;  z-index:5;'>

	
		<div class='col-sm-2'></div>

		<div class='col-sm-8'>
			<div align='center' class='mycontainer'>
				
					<span align='center' style='font:35px centaur;  vertical-align:20px; top:55px; position:relative; color:grey;'> Sign In</span><br/>
				<span align='right' class='x' style='position:relative; border:px solid red; color:red; font:20px arial; cursor:pointer; left:35%; top:5%; padding:5px;'>x</span>
				<form method='POST' action='' id='form1' >
				<table  align='center' class='mtable'>

					<tr style=' height:45px;'><td align='CENTER'><input class='validated' id='email' required type='email' placeholder='E-Mail' name='emails'  style='height:40px; font-size:14px; width:75%; color:grey; border:none; border-bottom:1px solid silver; '></td></tr>
					<tr style=' height:2.5em; '></tr>
					<tr><td align='CENTER'><input required type='password' name='password' id='pass' placeholder='Password' style='height:40px; font-size:14px; width:75%; color:grey; border:none; border-bottom:1px solid silver; '></td></tr>
					<tr style=' height:10px; '></tr>
					<tr  style=' height:45px; '><td align='CENTER' class='text-primary' style='color:skyblue;  font-size:15px;'> Forgot password?</td></tr><br />
					<tr style=' height:10px; '><td align='center'><p class='message'></p></td></tr>
					
					<tr><td colspan='2' align='center' ><input style='border:px solid; width:75%;'  id='submit' type='submit' name='submit' value='Sign In' 
					class='btn btn-outline-primary '> </td></tr>
					<tr style=' height:20px; '></tr>
					
					<tr><td colspan='2' align='center' style='font-size:13px;'>Not yet a customer, <a href='#' id='signinup'>Sign Up</a></td></tr>
				</table></form>
			</div>
		</div>

		<div class='col-sm-2'></div>
	</div>
  </div>
</div>
";
 }
 
 
echo"
<div class='signup' >";

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
	}else{ ?>



	
	<div align="center" class="opacity" style="z-index:5;">

 <div class="row" style=" height:100%;">
		<div class="col-sm-2"></div>

		<div class="col-sm-8">
<div align="center" class="mcontainer">

<span align="center" style="font:30px centaur; height:100%; vertical-align:0px; top:15px; position:relative; color:grey;"> SIGN UP</span><BR>
<span align="right" class="xp" style="position:relative; border:0px solid red; color:red; font:25px arial; cursor:pointer; left:34%; bottom:3%; padding:5px;">x</span>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table  border="0" align="center" class="mtable">

<tr  style=' height:30px; '><td align="center"><input type="text" placeholder='Full Name' class="validated" id="mail" required autofocus name="name" style='height:40px; width:75%; font-size:14px; color:grey; border:none; border-bottom:1px solid silver;'></td></tr>
<tr style=' height:20px; '></tr>
<tr  style=' height:30px; '><td align="center"><input class="validated" id="tel" required type="tel" placeholder='Phone Number' name="tel" style='height:40px; width:75%; font-size:14px; color:grey; border:none; border-bottom:1px solid silver;'></td></tr>
<tr style=' height:20px; '></tr>
<tr  style=' height:30px; '><td align="center"><input class="validated" id="semail" required type="email" placeholder='E-Mail' name="email" style='height:40px; width:75%; font-size:14px; color:grey; border:none; border-bottom:1px solid silver;'></td></tr>
<tr style=' height:20px; '></tr>
<tr  style=' height:30px; '><td align="center"><input class="validated" id="country" required type="text" placeholder='Address' name="address" style='height:40px; width:75%; font-size:14px; color:grey; border:none; border-bottom:1px solid silver;'></td></tr>
<tr style=' height:20px; '></tr>
<tr><td align="center"><input class="validated" id="pass" required type="password" name="password" placeholder='Password' style='height:40px; width:75%; color:grey; font-size:14px; border:none; border-bottom:1px solid silver;'></td></tr>
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

<div style="clear:both;"></div>





</body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
<script>
$(document).ready(function(){
	
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
	
		$("#form1").submit(function(event){
	
		event.preventDefault();
		
		var email= $("#email").val();
		var pass = $("#pass").val();
		var submit = $("#submit").val();
		$(".message").load("php.php",{
			email: email,
			pass: pass,
			submit: submit
		
		}, function(response, status, xhr){
			
			if(status == "error"){
				var msg = "sorry there  was an error: ";
				alert(msg);
				
				$("#error").html(msg + xhr.status + " " + xhr.statusText);
			}else{
				
				alert('the load really works');
				
			}
				
		});
	});

	
	$("#check_out").submit(function(event){
		event.preventDefault();
		
		var val = $("#log_chk").val();
		if(val=='0'){
			$('.signin').show();
		}else{
			var check_out =this.id;
			var total_price =$('#total_price').val();
			$('.message_box').load("php.php",{
				check_out: check_out,
				total_price: total_price
			}, function(){
				//alert('it loads');
			});	
			
		}
	});
});
</script>

</html>