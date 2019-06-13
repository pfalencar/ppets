<?php  
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
?>
					
				