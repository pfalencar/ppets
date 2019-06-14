<?php  

//Abre uma conexão com um servidor MySQL
ini_set('default_charset', 'UTF-8'); //esta linha antes de criar a variavel conexao
$conn = new mysqli ("localhost", "root", "", "ppets");
$conn->query("SET NAMES utf8"); // esta linha depois dela criada.

//Recupera os valores enviados do formulario
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$cor = $_POST['cor'];							
$tamanho = $_POST['tamanho'];
$categoria = $_POST['categoria'];
$classificacao = $_POST['classificacao'];

//insere dados no banco
$squery = "INSERT INTO produto (nome,valor,descricao,cor,tamanho,categoria,classificacao) VALUES('$nome','$valor','$descricao','$cor','$tamanho','$categoria','$classificacao')";
$resultado = mysqli_query($conn,$squery);



if($resultado === false){
   // Caso algo tenha dado errado, exibe uma mensagem de erro   
   echo 'erro: '. mysqli_error($conn);
   echo "<script>alert('ERRO!'". mysqli_error($conn) .")</script>";
   header("Location: index.html");
}else{
   // Aviso de registro criado com sucesso
   echo 'Operação realizada com sucesso';
   header("Location: checkout.html");
}

//fecha conexão
mysqli_close($conn);

	
?>