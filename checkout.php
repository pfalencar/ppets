<?php  

//Abre uma conexão com um servidor MySQL
ini_set('default_charset', 'UTF-8'); //esta linha antes de criar a variavel conexao
$conn = new mysqli ("localhost", "root", "", "ppets");
$conn->query("SET NAMES utf8"); // esta linha depois dela criada.

//Recupera os valores enviados do formulario
$nome = $_POST['nomecompleto'];
$email = $_POST['email'];
$endereco = $_POST['address'];
$cep = $_POST['zipcode'];							
$cidade = $_POST['city'];
$estado = $_POST['state'];
$pais = $_POST['country'];
$telefone = $_POST['tel'];

//insere dados no banco
$squery = "INSERT INTO endereco_cobranca (nome_completo,email,endereco,cep,cidade,estado,pais,telefone) VALUES('$nome','$email','$endereco','$cep','$cidade','$estado','$pais','$telefone')";
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


/*
	session_start();
	include("conexaoSQL.php");

	if (isset($_POST['nomecompleto'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['zipcode'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['country'])&&isset($_POST['tel'])) {
	$nome = $_POST['nomecompleto'];
	$email = $_POST['email'];
	$endereco = $_POST['address'];
    $cep = $_POST['zipcode'];							
	$cidade = $_POST['city'];
	$estado = $_POST['state'];
	$pais = $_POST['country'];
	$telefone = $_POST['tel'];
							
							
							
							
	$sql = "INSERT INTO endereco_cobranca(nome_completo,email,endereco,cep,cidade,estado,pais,telefone) values('$nome','$email','$endereco','$cep','$cidade','$estado','$pais','$telefone');";
	$result = $conn -> query($sql);
		if ($conn -> query($sql) === true) {
			header("Location: index.php");
			echo "<script>alert('Dados Incluidos com Sucesso')</script>";
			exit();
		} else {
			echo "<script>alert('ERRO!')</script>";
			exit();
		}
	}	
*/
	
?>