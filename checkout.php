<?php  
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
							
							
							
							
	$sql = "INSERT INTO  endereco_entrega(nome_completo,email,endereco,cep,cidade,estado,pais,telefone) values('$nome','$email','$endereco','$cep','$cidade','$estado','$pais','$telefone');";
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