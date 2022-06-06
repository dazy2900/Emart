<?php if(!empty($_SESSION["emart_cart"])) {
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
	class select_class
?>