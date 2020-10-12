<?php 

$servername = $_SERVER['SERVER_NAME'];
$username = 'root';
$password = '';
$dbname = 'bankuser';

//Creating Connection
$conn = new mysqli($servername , $username , $password , $dbname);
if ($conn -> connect_error) {
	die( "Connection to Database Failed");
	# code...
}

$sql = "SELECT id , Email , Names, Amount FROM candiates";
$sqle = "SELECT name , Email , Amount from admin";
$transsql = "SELECT Dater ,Message , soney from transaction";

$resulte = $conn->query($sqle);
$result = $conn->query($sql);
$resulter = $conn->query($transsql);



?>