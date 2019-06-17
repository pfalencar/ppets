<?php
session_start();
include("conexaoSQL.php");
$varNome = $_GET['nome'];
$varValor = $_GET['valor'];
$varCod = $_GET['id'];
$img = $_GET['img'];

$nome = mysqli_real_escape_string($conn,$varNome);
$cod = mysqli_real_escape_string($conn,$varCod);
$valor = mysqli_real_escape_string($conn,$varValor);

$sql = "INSERT into carrinho (nome,valor,cod_produto,imagem,quantidade) values ('$nome','$valor','$cod','$img',1)";
try {
    $conn->query($sql);
    //echo $sql;
    echo"<script language='javascript' type='text/javascript'>
        alert('Novo produto adicionado ao carrinho');window.location
        .href='../checkout.php'</script>";
        exit();
} catch (Throwable $th) {
    throw $th;
}

?>