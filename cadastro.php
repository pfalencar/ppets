<?php 

//Abre uma conexão com um servidor MySQL
$conn = new mysqli ("localhost", "root", "", "ppets");

//Recupera os valores enviados do formulario
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//insere dados no banco
$squery = "INSERT INTO cliente(nome_completo,email,senha) VALUES('$nome','$login','$senha')";
$resultado = mysqli_query($conn,$squery);


if($resultado === false){
   // Caso algo tenha dado errado, exibe uma mensagem de erro   
   echo 'erro: '. mysqli_error($conn);
   echo "<script>alert('ERRO!'". mysqli_error($conn) .")</script>";
   header("Location: index.html");
}else{
   // Aviso de registro criado com sucesso
   echo 'Operação realizada com sucesso';
   echo "<script>alert('Dados Incluidos com Sucesso')</script>";
   header("Location: checkout.html");
}

//fecha conexão
mysqli_close($conn);



/* 
	session_start();
	include("conexaoSQL.php");

	if (isset($_POST['nome'])&&isset($_POST['login'])&&isset($_POST['senha'])) {
	$nome = $_POST['nome'];
	$email = $_POST['login'];
	$senha = $_POST['senha'];
							

							
							
							
							
	$sql = "INSERT INTO  cliente(nome_completo,email,senha) values('$nome','$email','$senha');";
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
					
				