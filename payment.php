<!DOCTYPE>
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

<style></style>

</head>
<body style="background-color:green; background-image:url(); max-width:100%; overflow-x:hidden; " >

<nav class="navbar navbar-expand-lg navbar-dark" style="background-image:url('image/plain.jpg'); color:blue; font:20px agency fb; font-weight:; position:fixed; width:100%;
				  border-bottom:1px solid silver; z-index:1;">
		<a class="navbar-brand" href="#"><img STYLE="position:relative; border:px solid red; margin:-10px 5px 5px; height:2.6em; width:110%;" src="image/assorted.png" ></a>
	
			
			
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
				<a style="border:2px solid white; border-radius:4px; color:white;" class="nav-link call" href ="#">Sign In</a>
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
<div style="padding-top:4.5em; border:1 px solid blue;">
<?php
	session_start();
	echo "Welcome ".$_SESSION['name'];
	?></div>
<center><FIELDSET align='center' style="border-radius:25px; width:99%; border:2px solid white; backgroud-color:white;"><legend style="color:white; brder:2px solid blue; font:23px agency fb; width:80px;">PAYMENT</legend>
<div align="" style="position:absolute; left:1000px; border:0px solid silver;"><img src="image/debit_card.png" style="height:250px; width:250px;"></div>
<form id="form1" name="form1" method="post" action="">
<TABLE BORDER="0" align='left' style="height:50%; width:50%; font-family:calibri;">
<TR><TD><br /></TD></TR>
  <TR><TD style=' height:45px; '></TD><TD> 
    <input type="text" name="textfield" placeholder="Surname"  style="height:30px; width:50%; color:grey; border:1px solid silver; border-radius:4px;"/><TR><TD>


  <TR><TD style=' height:35px; '></TD><TD>
  <input type="text" name="textfield2" placeholder="Other Names"  style="height:30px; width:50%; color:grey; border:1px solid silver; border-radius:4px;"/><TR><TD>
  

  <TR><TD style=' height:45px; '></TD><TD>
  <input type="text" name="textfield3" id="textfield" placeholder="Account Name"  style="height:30px; width:50%; color:grey; border:1px solid silver; border-radius:4px;"/></TR></TD>


  <TR><TD style=' height:45px; '></TD><TD>
  <input type="text" name="textfield4" id="label" placeholder="Bank"  style="height:30px; width:50%; color:grey; border:1px solid silver; border-radius:4px;"/></TD></TR>


  <TR><TD style=' height:45px; '></TD><TD>
  <input type="text" name="textfield5" id="label2" placeholder="Card Pin"  style="height:30px; width:50%; color:grey; border:1px solid silver; border-radius:4px;"/><TR><TD>

<TR><TD><p></p></TD><TD style="color:#1A1A1A" ><p style="text-align:; left:39px;">PAYING VIA<p>

  <input name="radiobutton" type="radio" value="radiobutton" id="radiobutton" />
  <label for="radiobutton">VISA CARD</label>
   <input name="radiobutton" type="radio" value="radiobutton" id="radio" />
  <label for="radio">MASTER CARD</label></TR></TD>


  <TR><TD style=' height:25px; '><label for="label3"></label></TD><TD>
  <input type="text" name="textfield6" id="label3" placeholder="Postal Address"  style="height:30px; width:50%; color:grey; border:1px solid silver; border-radius:4px;"/></Td></Tr>


</table>
  
  <div><input type="submit" name="Submit" value="MAKE PAYMENT" style='height:45px; font:20px Agency FB; border-radius:5px; color:white;  background-color:rgba(0,220,270,0.9); text-decoration:none; width:280px;'/></div>
</FIELDSET>   </center>
</form>
<div align="right" style=" left:0%; float:right; width:80px; top:30px; border:0px solid red; z-index:20px;"><a href="cart.php"><img src="image/backlogo.png" style="position:relative; height:60px;  border-radius:0px;  border:0px solid blue; width:80px"></a></div>
<p>&nbsp;</p>
<?php

if(isset($_SESSION['name'])){
if(isset($_POST['Submit'])){
	$cname=$_SESSION['name'];
	include"connect.php";
	$sql="UPDATE sales SET bought = '1' WHERE cname = '$cname' ;";
$query=mysqli_query($conn, $sql);
if($query){
	echo"<script>alert('done');</script>";
}
	}
}
?>
</body>

</html>
