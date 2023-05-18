<?php
$nama=$_POST["first_name"];
$nama2=$_POST["last_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];

include_once("koneksi.php");

$query= mysqli_query ($conn,"INSERT INTO `customer` (`first_name`,`last_name`,`email`,`phone`,`address`) 
VALUES ('$nama','$nama2','$email','$phone','$address');");

header("Location:index.php")
?>