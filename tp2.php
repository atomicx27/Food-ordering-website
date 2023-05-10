<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="cart";
$conn=new mysqli("$servername","$username","$password","$dbname");
$pnr=$_POST['pnr'];
$sql="INSERT INTO pnr(pnr_number) VALUES ('$pnr')";
echo "$pnr";

$conn->close();

?>