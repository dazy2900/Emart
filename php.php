
<?php
session_start(); 
	include"connect.php";
	
	

if(isset($_POST['submit'])){

$email = $_POST['email'];
$pass  = $_POST['pass'];
$_SESSION['session_name'] = $email;
		 $session_name=$_SESSION['session_name'];
if($email == 'email@gmail.com' AND $pass == 'admin001') {

	
echo"<script> window.location.href='emart_admin.php'</script>";
	}else{
$sql = "SELECT * FROM profile WHERE email = '$email' AND password = '$pass'";

$retval = mysqli_query( $conn, $sql);
 $count = mysqli_num_rows($retval);
$row= mysqli_fetch_array($retval);
		
		
 	 
	 if($count == 1)
	 {
		 $_SESSION['session_name'] = $email;
		 $session_name=$_SESSION['session_name'];
	echo"<script> $('.signin').hide();</script>";
	 }
	 
	 else
	 {

		echo "<span class='error'>Incorrect E-Mail or Password</span>"; 
}

}
}




						
						
						
if(isset($_POST['check_out'])){
	
	include "connect.php";
	$total_price= $_POST['total_price'];
	$user_data= $_SESSION['session_name'];
	$session_data=$_SESSION['emart_cart'];
	$serialize = serialize($session_data);
	if(isset($_SESSION['session_name'])){
	//$sql="INSERT INTO serialize_cart (user_data, session_data, total_price)  VALUE('$user_data','$serialize','$total_price' )";
	//$query = mysqli_query( $conn, $sql);
	
	$sql2="INSERT INTO transaction (user_data, session_data, total_price)  VALUE('$user_data','$serialize','$total_price' )";
	$query2 = mysqli_query( $conn, $sql2);
		
	if($query2){
			unset($_SESSION["emart_cart"]);
			echo"<script>alert('purchased')</script>";
		echo"<script> window.location.href='cart.php'</script>";
		  
		}
	}else{
	Echo"<script>$('.signin').show();  </script>	";
	}
}

if(isset($_POST['signup_submit'])){
include'connect.php';
mysqli_select_db('emart');
$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];
$email = $_POST['email'];
$password =$_POST['pass'];

$sql = "INSERT INTO profile(name, tel, email, address, password) value('$name', '$tel', '$email', '$address', '$password')";
	$retval = mysqli_query($conn, $sql);
echo"<script> $('.signup').hide();</script>";	


if(! $retval){
die('Sorry, Could Not Sign Up :'. mysqli_error());
}
mysqli_close($conn);
}




if(isset($_POST['cat_input'])){
$type = $_POST['type'];	 
//$shoes = $_POST['shoes'];
//$palms = $_POST['palms'];

  $sql = "SELECT count(pname) FROM product "; 
         $retval = mysqli_query( $conn, $sql ); 
          
         if(! $retval ) { 
            die('Could not get data: ' . mysqli_error()); 
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
		 
		 

$sql = "SELECT * FROM product  WHERE category = '$type'  LIMIT $offset, 9" ;

$retval= mysqli_query( $conn, $sql);
echo"<table border='0' align='center' style='width:100%;'>";
$i=0;


	while($row= mysqli_fetch_array($retval)){
		$pname=$row['pname'];
		$id=$row['id'];
		$price=$row['price'];
		$pic=$row['pics'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		if($i % 3 == 0){
		echo "<tr align='center' ><td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br /></td>";
	}else{
	echo "<td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br/></td>";
	}
	$i++;
	}
echo"
<div class='message_box' name='message_box' style='margin:10px 0px;'>

</div>
</td></tr></table>";

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
}

/*if(isset($_POST['palms'])){
	
  $sql = "SELECT count(pname) FROM product"; 
         $retval = mysqli_query(  $conn, $sql ); 
          
         if(! $retval ) { 
            die('Could not get data: ' . mysqli_error()); 
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
		 
		 

$sql = "SELECT * FROM product WHERE category = 'palms'  LIMIT $offset, 9" ;

$retval= mysqli_query( $conn, $sql);
echo"<table border='0' align='center' style='width:100%;'>";
$i=0;


	while($row= mysqli_fetch_array($retval)){
		$pname=$row['pname'];
		$id=$row['id'];
		$price=$row['price'];
		$pic=$row['pics'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		if($i % 3 == 0){
		echo "<tr align='center' ><td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br /></td>";
	}else{
	echo "<td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br/></td>";
	}
	$i++;
	}
echo"
<div class='message_box' name='message_box' style='margin:10px 0px;'>

</div>
</td></tr></table>";

if(!empty($_SESSION["emart_cart"])) {
						$cart_count = count(array_keys($_SESSION["emart_cart"]));
						foreach ($_SESSION["emart_cart"] as $key => $product){
						echo"<br>";
						echo"this is the second one ";
						echo $product["id"]." ".$key;
						echo $product["pname"];
						echo $product["price"];
						

}
		
						 echo "<br>" .$cart_count."  items"; 
						 }else{echo"0"; }
}
if(isset($_POST['shoes'])){
	
  $sql = "SELECT count(pname) FROM product"; 
         $retval = mysqli_query(  $conn, $sql ); 
          
         if(! $retval ) { 
            die('Could not get data: ' . mysqli_error()); 
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
		 
		 

$sql = "SELECT * FROM product  WHERE category = 'shoes'  LIMIT $offset, 9" ;

$retval= mysqli_query( $conn, $sql);
echo"<table border='0' align='center' style='width:100%;'>";
$i=0;


	while($row= mysqli_fetch_array($retval)){
		$pname=$row['pname'];
		$id=$row['id'];
		$price=$row['price'];
		$pic=$row['pics'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		if($i % 3 == 0){
		echo "<tr align='center' ><td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br /></td>";
	}else{
	echo "<td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br/></td>";
	}
	$i++;
	}
echo"
<div class='message_box' name='message_box' style='margin:10px 0px;'>

</div>
</td></tr></table>";

if(!empty($_SESSION["emart_cart"])) {
						$cart_count = count(array_keys($_SESSION["emart_cart"]));
						foreach ($_SESSION["emart_cart"] as $key => $product){
						echo"<br>";
						echo"this is the second one ";
						echo $product["id"]." ".$key;
						echo $product["pname"];
						echo $product["price"];
						

}
		
						 echo "<br>" .$cart_count."  items"; 
						 }else{echo"0"; }
}
*/
/*$status="";
$buys = "";
if($bu=="bu"){
echo"<script>alert('we clicked');</script>";
$ids = $_POST['ids'];

$sql="SELECT * FROM topdeal WHERE id ='$ids';";
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
	
	echo"<script>alert('hell yeah $key');</script>";
	

}
 }
 else{
	 echo"<script>alert('nah');</script>";
 }
if(empty($_SESSION["emart_cart"])) {
    $_SESSION["emart_cart"] = $cartArray;
    $status = "<div class='box' syle='color:red;'>Product is added to your cart!</div>";

}else{
    $array_keys = array_keys($_SESSION["emart_cart"]);
    if(in_array($pname, $array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
	
    }else {
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
	
	*/


if(isset($_POST['search'])){

$search_input = $_POST['search_input'];
$sql = "SELECT * FROM product WHERE pname LIKE '%{$search_input}%';";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

echo"<table border='0' align='center' style='width:100%;'>";
$i = 0;
while($row = mysqli_fetch_assoc($result)){
$pname=$row['pname'];
		$id=$row['id'];
		$price=$row['price'];
		$pic=$row['pics'];
		$loc="upload/";
		$pics=$loc.basename($pic);
		if($i % 3 == 0){
		echo "<tr align='center' ><td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br /></td>";
	}else{
	echo "<td ><form action='' method='POST' class='display-form'><table border='0'  style='height:300px; background-color:white;   box-shadow: 4px 4px 4px 1px rgba(0, 0, 0, 0.01); border-radius:0px; font: 14px  Franklin Gothic Medium Cond; color:silver; border: px solid red; width:85%;'>";
		echo "<tr><td align='center' colspan='2' style='height:225px; width:190px;' ><img src='$pics' style='height:100%; border-radius:0px; border:px solid brown; width:100%;'></td></tr>
		<tr><td></td></tr>
		<tr><td colspan='' style='color:silver; font-size:14px; text-transform:capitalize; padding-left:3px; height:50px; width:70%;'>$pname<input type='hidden' name='pname' value='$pname'></td>
		<td style='left:2px; color:grey; font-size:13px; text-align:right;'>#$price<input type='hidden' name='price' value='$price'></td>
		</tr><tr>
		<td colspan='2' style='text-align:center; border:2px solid grey;'>
		<button type='submit' name='buy' class='buys' id='$id' style='background-color:white; border:none; '><img src='image/cart1.jpg' style='width:45px; height:30px;'></button></td></tr>
		</table></form><br /></td>";
	}
	$i++;
	
}
echo"<div class='message_box' name='message_box' style='margin:10px 0px;'>

</div>";
}
}

$status="";
if(isset($_POST['buy'])){
$id = $_POST['id'];
$sql="SELECT * FROM product  WHERE id ='$id';";
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
 
if(empty($_SESSION["emart_cart"])) {

    $_SESSION["emart_cart"] = $cartArray;
    $status = "<div class='box' syle='color:red;'>Product is added to your cart!</div>";
    
}else{
    $array_keys = array_keys($_SESSION["emart_cart"]);
   
 if(in_array($pname, $array_keys)) {

	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
	
    }else {

    $_SESSION["emart_cart"] = array_merge(
    $_SESSION["emart_cart"],
    $cartArray
    );
    $status = "<div class='box' style='color:red;'>Product is added to your cart!</div>";
	}
 
	}
	
	


echo $status;

}






?>

		
<script>
$(document).ready(function(){
		
		
			$('.buys').click(function(event){
	
		event.preventDefault();
		

		var ids = this.id;
		var buys = $(".buys").val();
		//alert(ids);

		$(".message_box").load("php_new.php",{
			ids: ids,
			buys: buys
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
		
});
</script>
