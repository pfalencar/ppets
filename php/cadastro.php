<?php  
	session_start();
	include("conexaoSQL.php");

	if (isset($_POST['nome'])&&isset($_POST['login'])&&isset($_POST['senha'])) {
	$varNome = $_POST['nome'];
	$varEmail = $_POST['login'];
	$varSenha = $_POST['senha'];

	$nome = mysqli_real_escape_string($conn,$varNome);
	$email = mysqli_real_escape_string($conn,$varEmail);
	$senha = mysqli_real_escape_string($conn,$varSenha);
							
	$select = "SELECT * FROM cliente WHERE nome_completo = '$nome' && senha = '$senha' && email = '$email';";
	$result = mysqli_query($conn,$select);						
	$row = mysqli_num_rows($result);						
	if ($row >=1) {
		echo"<script language='javascript' type='text/javascript'>
          			alert('Usuario Já Cadastrado');window.location
          			.href='../blankCadastro.php'</script>";
					exit();
	} else {
		$sql = "INSERT INTO  cliente(nome_completo,email,senha) values('$nome','$email','$senha');";
	
		if ($conn -> query($sql) === true) {
			$_SESSION['login'] = $nome;
			echo"<script language='javascript' type='text/javascript'>
          	alert('Dados Cadastrados com Sucesso!');window.location
          	.href='../index.php'</script>";
			exit();
		} else {
			echo"<script language='javascript' type='text/javascript'>
          	alert('Não foi possível cadastrar esse usuário');window.location
          	.href='../blankCadastro.php'</script>";
			exit();
		}
	}
		
							
	
	}						
?>
					
				