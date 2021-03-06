<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>PPETS - Loja de Pet Shop</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
	/* Make the image fully responsive */
	.carousel-inner  {
		width: 100%;
		height: 100%;
	}
</style>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> ppets@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> </a></li>
					</ul>
					<ul class="header-links pull-right">
						<?php  
							if (isset($_SESSION['login']) && $_SESSION['login']=='admin'):						
						?>
						<li><a href="blankCadastroProduto.php"><?php echo "Novo Produto"; ?></a></li>	
						<?php
							endif;
						?>		
					<li><a href="#"><i class="fa fa-dollar"></i> BRL</a></li>
						<li>
							<?php 
							if (isset($_SESSION['login'])):
							?>
							<a href="minhaConta.php"><?php echo $_SESSION['login']; ?></a>	
							<?php
							else:
							?>
							<a href="blankLogin.php"><?php echo "Minha Conta"; ?></a>	
							<?php
							endif;
							?>
						 <a href=""><i class="fa fa-user-o"></i> 
							
						</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo_perfect.jpg" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Categorias</option>
										<option value="1">Cachorros</option>
										<option value="1">Gatos</option>
										<option value="1">Peixes</option>
										<option value="1">Pássaros</option>
										<option value="1">Roedores</option>
									</select>
									<input class="input" placeholder="Pesquise algo aqui">
									<a href="store.php"><button class="search-btn">Buscar</button></a>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Lista de Desejos</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrinho</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/acessorioCachorro.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Ver Carrinho</a>
											<a href="checkout.php">Finalizar  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		
		
		<form enctype="multipart/form-data" action="php/cadastroProduto.php" method="post">

			<h1> Bem vindo ao Cadastro de produto</h1> 
			<h2> Preencha o formulário abaixo para casdastrar seus produtos</h2><br />

			<!-- DADOS PESSOAIS-->

			<legend>Dados do Produto</legend>
			<table cellspacing="10">
			
			

			
			<!-- Nome do produto-->
			<tr>
			<td>
				<label for="nome">Nome: </label>
			</td>
			<td align="left">
				<input type="text" name="nome">
			</td>
			
				<!-- valor do produto-->
			<tr>
			<td>
				<label for="valor">Valor: </label>
			</td>
			<td align="left">
				<input type="text" name="valor">
			</td>
			</tr>
			
			<!-- descrição do produto-->
			<tr>
			<td>
				<label for="descrição">Descrição: </label>
			</td>
			<td align="left">
				<input type="text" name="descricao">
			</td>
			</tr>
			
			<!-- cor do produto-->
			<tr>
			<td>
				<label for="cor">Cor: </label>
			</td>
			<td align="left">
				<input type="text" name="cor">
			</td>
			</tr>
			
			<!-- Tamanho do produto-->
			<tr>
			<td>
				<label for="tamanho">Tamanho: </label>
			</td>
			<td align="left">
				<input type="text" name="tamanho">
			</td>
				</tr>

				<!-- categoria do produto-->
				<tr>
			<td>
				<label for="categoria">Categoria: </label>
			</td>
			<td align="left">
			<select name='categoria'>
			<option value="">Selecione</option>
			<option value="alimentacao">Alimentação</option>
			<option value="limpeza">Limpeza</option>
			<option value="lazer">Lazer</option>
			<option value="ofetas">Ofertas</option>
			<option value="acessorios">Acessórios</option>
			</select>
			</td>
				</tr>
			
			<!-- Classificação do produto-->
			<tr>
			<td>
				<label for="classificação">Classificação: </label>
			</td>
			<td align="left">
			<select name='classificacao'>
			<option value="">Selecione</option>
			<option value="cachorro">Cachorros</option>
			<option value="gato">Gatos</option>
			<option value="peixe">Peixes</option>
			<option value="roedore">Roedores</option>
			<option value="passaro">Pássaros</option>
			</select>
			</td>
				</tr>
			
			<!-- Imagem do produto-->
			<tr>
			<td>
				<label for="imagem">Imagem: </label>
			</td>
			<td align="left">
				<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
				<div><input name="produto" type="file"/></div>
			</td>

			</tr>
			</table>
			<input type="submit" value="Cadastrar">

		</form>

		

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nós</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>São Paulo - SP</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>ppets@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="store.html">Ofertas</a></li>
									<li><a href="store.html">Limpeza</a></li>
									<li><a href="store.html">Alimentação</a></li>
									<li><a href="store.html">Lazer</a></li>
									<li><a href="store.html">Acessórios</a></li>
									<li><a href="#">Ofertas</a></li>
									<li><a href="#">Limpeza</a></li>
									<li><a href="#">Alimentação</a></li>
									<li><a href="#">Lazer</a></li>
									<li><a href="#">Acessórios</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informações</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre Nós</a></li>
									<li><a href="#">Fale Conosco</a></li>
									<li><a href="#">Politica de Privacidade</a></li>
									<li><a href="#">Termos e Condições</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Serviços</h3>
								<ul class="footer-links">
									<li><a href="#">Minha Conta</a></li>
									<li><a href="checkout.html">Ver Carrinho</a></li>
									<li><a href="#">Ver Carrinho</a></li>
									<li><a href="#">Lista de Desejos</a></li>
									<li><a href="#">Rastrear meu Pedido</a></li>
									<li><a href="#">Ajuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
