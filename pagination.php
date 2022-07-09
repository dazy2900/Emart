<?php
include'connect.php';

//Echo"<script>alert('pagination');</script>";

if(isset($_POST['page'])){

$page = $_POST['page_num'];
//echo"<script>alert($page)</script>";

$sql = "SELECT count(pname) FROM product "; 
       $retval = mysqli_query( $conn, $sql ); 
       if(! $retval ) { 
          die('Could not get data: ' .  mysqli_error()); 
       } 
       $row = mysqli_fetch_array($retval, MYSQLI_NUM ); 
       $rec_count = $row[0]; 
       $rec_per_page= 9;
     //  $offset = 0;
       // echo"<script>alert($page)</script>";
       $offset = $rec_per_page * ($page-1) ; 
      //  echo"<script>alert($offset)</script>";
       $last = $page - 2;
       $left_rec = $rec_count - (($page-1) * $rec_per_page);
      
    
$sql = "SELECT * FROM product LIMIT $offset, 9 " ;

$retval= mysqli_query($conn, $sql);
echo"<table border='0' align='center' style='width:100%;'>";
$i=0;
echo"<span style='color:grey; font:35px agency fb; text-transform:capitalize;'> </span>";

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
}
//working
/*
      if( $left_rec < 9 ) { 
                  $last = $page - 2; 
                  echo "<a href = emart_lp.php?page=$last><input type='button' value='Prev' class='btn btn-primary btn-sm'></a>"; 
       }else if( $page == 1 ) { 
                  echo "<a href = emart_lp.php?page=$page><input type='button' value='Next' class='btn btn-primary btn-sm'></a>"; 
       }else if( $page > 1 ) { 
      
                  $last = $page - 2; 
                  echo "<a href = emart_lp.php?page=$last><input type='button' value='Prev' class='btn btn-primary btn-sm'></a> |"; 
                  echo "<a href = emart_lp.php?page=$page><input type='button' value='Next' class='btn btn-primary btn-sm'></a>"; 
               }
*/ 
?>