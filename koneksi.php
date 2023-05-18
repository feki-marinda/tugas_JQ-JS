<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "order";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 
If ($conn) {
    echo "connected";
 } else {
    echo "not connected";
 }
?>
