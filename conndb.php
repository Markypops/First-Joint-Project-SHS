<?php 
$server="localhost";
$username="root";
$password="";
$database="db_ophiuchus";


$conn= new mysqli($server,$username,$password,$database);
if($conn->connect_error)
{
	die("Error Connection" .$connect_error);
}

?>