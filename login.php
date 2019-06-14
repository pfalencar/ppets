<?php  
session_start();
include 'conexaoSQL.php';
	if (isset($_POST['login'])&&isset($_POST['pass'])){
			try {
				$varEmail = $_POST['login'];
				$varSenha = $_POST['pass'];
				$email = mysqli_real_escape_string($conn,$varEmail);
				$senha = mysqli_real_escape_string($conn,$varSenha);

				$sql = "SELECT * FROM cliente WHERE email = '$email' && senha = '$senha';" or die("Erro ao Selecionar");
				$result = mysqli_query($conn,$sql);
				$row = mysqli_num_rows($result);
				if ($row >= 1 ) {
					$_SESSION['login'] = $email;
					header('Location: index.php');
					exit();
				}
			} catch (Exception $e) {
				header('Location: index.php');
				echo "<script language='javascript' type='text/javascript'>alert('Nenhum Usuario Encontrado')</script>";
				exit();
			}
		}
		
		
		

		

?>
