<?php 

$servername = "localhost";
$database = "ppets";
$user = "root";
$passwd = "";

$conn = new mysqli($servername,$user,$passwd,$database);
if ($conn->connect_error) {
	die("Conexão falhou: ".$conn->connect_error);
}


?>