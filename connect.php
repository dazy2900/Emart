<?php
 

$dbhost='localhost';
$username='root';
$dbpass='';
$dbname='emart';


$conn = mysqli_connect($dbhost, $username, $dbpass, $dbname, 3306);

if ($conn) {
	//echo "connection established" ;
}
else {
	echo "<p class='pa'> CONNECT ERROR :PLEASE CONTACT ADMIN</p>" . mysqli_error($conn) ;
}



?> 