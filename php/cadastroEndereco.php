<?php
session_start();
include("conexaoSQL.php");

if (isset($_SESSION['login'])) {
    if (isset($_POST['endereco'])&&isset($_POST['cidade'])&&isset($_POST['estado'])&&isset($_POST['cep'])&&isset($_POST['pais'])&&isset($_POST['tel'])) {
        $varEndereco = $_POST['endereco'];
        $varCidade = $_POST['cidade'];
        $varEstado = $_POST['estado'];
        $varCep = $_POST['cep'];
        $varPais = $_POST['pais'];
        $varTel = $_POST['tel'];
        $varNotas = $_POST['notas'];
        $varNome = $_SESSION['login'];
    
        $endereco = mysqli_real_escape_string($conn,$varEndereco);
        $cidade = mysqli_real_escape_string($conn,$varCidade);
        $estado = mysqli_real_escape_string($conn,$varEstado);
        $cep = mysqli_real_escape_string($conn,$varCep);
        $pais = mysqli_real_escape_string($conn,$varPais);
        $tel = mysqli_real_escape_string($conn,$varTel);
        $notas = mysqli_real_escape_string($conn,$varNotas);
        $nome = mysqli_real_escape_string($conn,$varNome);
    
        
    
    
        $insert = "INSERT INTO endereco_entrega (nome,endereco,cep,cidade,estado,pais,telefone,notas) values ('$nome','$endereco','$cep','$cidade','$estado','$pais','$tel','$notas');";
        
        if ($conn -> query($insert) === true) {           
            echo"<script language='javascript' type='text/javascript'>
                alert('Dados Cadastrados com Sucesso!');window.location
                .href='../checkout.php'</script>";
            exit();
        } else {
            echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse endereço');window.location
                .href='../checkout.php'</script>";
                exit();
        }
    
    } else {
        echo"<script language='javascript' type='text/javascript'>
            alert('Faltam dados a serem digitados');window.location
            .href='../checkout.php'</script>";
            exit();
    }
} else {
    echo"<script language='javascript' type='text/javascript'>
            alert('Você precisa estar logado para cadastrar um novo endereço');window.location
            .href='../blankCadastro.php'</script>";
            exit();
}



?>