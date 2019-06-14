<?php  
session_start();
include 'conexaoSQL.php';
	if (isset($_POST['login'])&&isset($_POST['pass'])){
			try {
				$varNome = $_POST['login'];
				$varSenha = $_POST['pass'];
				$nome = mysqli_real_escape_string($conn,$varNome);
				$senha = mysqli_real_escape_string($conn,$varSenha);

				$sql = "SELECT * FROM cliente WHERE nome_completo = '$nome' && senha = '$senha';" or die("Erro ao Selecionar");
				$result = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($result);
				
				if ($row >= 1 ) {
					$_SESSION['login'] = $nome;
					header('Location: ../index.php');
					exit();
				}else{
					echo"<script language='javascript' type='text/javascript'>
          			alert('Nenhum Usuario Encontrado');window.location
          			.href='../blankLogin.php'</script>";
					exit();
				}
			} catch (Exception $e) {
				echo"<script language='javascript' type='text/javascript'>
          			alert('Erro ao Selecionar Usuario');window.location
          			.href='../blankLogin.php'</script>";
					exit();
			}
		}
		
		
		

		

?>
