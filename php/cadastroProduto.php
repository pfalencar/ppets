<?php
session_start();
include("conexaoSQL.php");

if (isset($_POST['nome'])&&isset($_POST['valor'])&&isset($_POST['descricao'])&&isset($_POST['cor'])&&isset($_POST['tamanho'])&&isset($_POST['categoria'])&&isset($_POST['classificacao'])&&isset($_FILES['produto'])) {
    $varNome = $_POST['nome'];
    $varValor = $_POST['valor'];
    $varDescricao = $_POST['descricao'];
    $varCor = $_POST['cor'];
    $varTamanho = $_POST['tamanho'];
    $varCategoria = $_POST['categoria'];
    $varClassificacao = $_POST['classificacao'];

    $nome = mysqli_real_escape_string($conn,$varNome);
    $valor = mysqli_real_escape_string($conn,$varValor);
    $descricao = mysqli_real_escape_string($conn,$varDescricao);
    $cor = mysqli_real_escape_string($conn,$varCor);
    $tamanho = mysqli_real_escape_string($conn,$varTamanho);
    $categoria = mysqli_real_escape_string($conn,$varCategoria);
    $classificacao = mysqli_real_escape_string($conn,$varClassificacao);
    
    $imagem = $_FILES['produto'];
    $diretorio = "img/";
    $nomeImagem = time().'.jpg';
    try {
        move_uploaded_file($imagem['tmp_name'], '../'.$diretorio.$nomeImagem);

            $insert = "INSERT INTO produto (nome,valor,descricao,cor,tamanho,categoria,classificacao,produto) values ('$nome','$valor','$descricao','$cor','$tamanho','$categoria','$classificacao','$nomeImagem');";
            try {
                $conn->query($insert);
                echo"<script language='javascript' type='text/javascript'>
                alert('Novo produto cadastrado com sucesso');window.location
                .href='../blankCadastroProduto.php'</script>";
                exit();
            } catch (\Throwable $th) {
                echo"<script language='javascript' type='text/javascript'>
                alert('Erro ao cadastrar novo produto!');window.location
                .href='../blankCadastroProduto.php'</script>";
                exit();
                throw $th;
                
            }
            
                
            
                
            
    } catch (\Throwable $th) {
        /*echo"<script language='javascript' type='text/javascript'>
        alert('Falha ao enviar imagem!');window.location
        .href='../blankCadastroProduto.php'</script>";
        exit();*/

        throw $th;
    }
    
        
    
        
    
    


} else {
    echo"<script language='javascript' type='text/javascript'>
            alert('Faltam informações a serem preenchidas');window.location
            .href='../blankCadastroProduto.php'</script>";
            exit();
}



?>