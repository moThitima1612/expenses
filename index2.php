<?php
header("content-type: text/html; charset=UTF-8");
include('connect.php');




$sql = $sql = "INSERT INTO `number`(`id`, `item_name`, `date`, `name`, `amount`) VALUES
('".@$_POST["id"]."','".$_POST["item_name"]."','".$_POST["date"]."','".$_POST["name"]."','".$_POST["amount"]."')";
$result = mysqli_query($conn,$sql);
 if($result){
	 echo "<script>";
	 echo "window.location=\"show.php\"";
	 echo "</script>";

 }else{
	 echo "ผิดพลาด $sql";
 }



 ?>