<?php  
	session_start();
	include("conexaoSQL.php");

	if (isset($_POST['nome'])&&isset($_POST['login'])&&isset($_POST['senha'])) {
	$nome = $_POST['nome'];
	$email = $_POST['login'];
	$senha = $_POST['senha'];
							

							
							
							
							
	$sql = "INSERT INTO  cliente(nome_completo,email,senha) values('$nome','$email','$senha');";
	
		if ($conn -> query($sql) === true) {
			$_SESSION['login'] = $email;
			echo"<script language='javascript' type='text/javascript'>
          	alert('Dados Cadastrados com Sucesso!');window.location
          	.href='index.php'</script>";
			exit();
		} else {
			echo"<script language='javascript' type='text/javascript'>
          	alert('Não foi possível cadastrar esse usuário');window.location
          	.href='blankCadastro.php'</script>";
			exit();
		}
	}						
?>
					
				