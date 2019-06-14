<?php
session_start();
include("conexaoSQL");

if (isset($_POST['nome'])&&isset($_POST['valor'])&&isset($_POST['descricao'])&&isset($_POST['cor'])&&isset($_POST['tamanho'])&&isset($_POST['categoria'])&&isset($_POST['classificacao'])&&isset($_FILES['produto'])) {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $cor = $_POST['cor'];
    $tamanho = $_POST['tamanho'];
    $categoria = $_POST['categoria'];
    $classificacao = $_POST['classificacao'];
    
    $imagem = $_FILES['produto'];
    $nomeImagem = time().'.jpg';

    if (move_uploaded_file($imagem['tmp_name'], $nomeImagem)) {
        $tamanhoImg = filesize($nomeImagem); 
        $mysqlImg = addslashes(fread(fopen($nomeImagem, "r"), $tamanhoImg)); 

        $insert = "INSERT INTO produto (nome,valor,descricao,cor,tamanho,categoria,classificacao,produto) values ('$nome','$valor','$descricao','$cor','$tamanho','$categoria','$nomeImagem');";
        if ($conn->query($insert)===true) {
            echo"<script language='javascript' type='text/javascript'>
            alert('Novo produto cadastrado com sucesso');window.location
            .href='../blankCadastroProduto.php'</script>";
            exit();
        } else {
            echo"<script language='javascript' type='text/javascript'>
            alert('Erro ao cadastrar novo produto!');window.location
            .href='../blankCadastroProduto.php'</script>";
            exit();
        }
        
    } else {
        echo"<script language='javascript' type='text/javascript'>
            alert('Falha ao enviar imagem!');window.location
            .href='../blankCadastroProduto.php'</script>";
            exit();
    }
    


} else {
    echo"<script language='javascript' type='text/javascript'>
            alert('Faltam informações a serem preenchidas');window.location
            .href='../blankCadastroProduto.php'</script>";
            exit();
}



?>