<?php 
session_start(); 

?>
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
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
							
								

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
													<h3 class="product-name"><a href="#">Nome do produto vai aqui</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>R$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Nome do produto vai aqui</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>R$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selecionados</small>
											<h5>SUBTOTAL: R$2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Ver Carrinho</a>
											<a href="#">Finalizar  <i class="fa fa-arrow-circle-right"></i></a>
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
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<form action="php/cadastroEndereco.php" method="POST">
						<!-- Billing Details -->
						<div class="billing-details">
							
							<div class="section-title">
								<h3 class="title">Endereço de cobrança</h3>
							</div>
							
								<div class="form-group">
									<input class="input" type="text" name="endereco" placeholder="Endereço">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="cidade" placeholder="Cidade">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="estado" placeholder="Estado">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="pais" placeholder="País">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="cep" placeholder="CEP">
								</div>
								<div class="form-group">
									<input class="input" type="tel" name="tel" placeholder="Telefone">
								</div>
							</div>						
						<!-- /Billing Details -->

							<!-- Order notes -->
							<div class="order-notes">
								<textarea class="input" name="notas" placeholder="Notas do pedido"></textarea>
							</div>
							<!-- /Order notes -->
							<input type="submit" value="Cadastrar Endereço" class="btn btn-primary btn-lg btn-block">
						</form>
					</div>
					
					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Seu pedido</h3>
						</div>
						
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUTO</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
								<?php
								include("php/conexaoSQL.php");
									$sql = "SELECT nome,valor,quantidade,sum(valor) as soma from carrinho";
									$result=mysqli_query($conn,$sql);
									$soma = '';
									while ($row=mysqli_fetch_object($result)) {
										if ($row!=null) {
											$soma = $row->soma;
								?>
									<div><?php echo $row->quantidade.'x '.$row->nome; ?></div>
									<div>R$<?php echo $row->valor; ?></div>
								<?php
									}else{
								?>
									<div>Nenhum produto no Carrinho</div>
									<div>R$0.00</div>
								</div>
								<?php
										}
									}
								?>
							</div>
							</div>
								<div class="order-col">
									<div>Frete</div>
									<div><strong>GRÁTIS</strong></div>
								</div>
								<div class="order-col">
									<div><strong>TOTAL</strong></div>
									<div><strong class="order-total">R$<?php echo $soma; ?></strong></div>
								</div>
							</div>
							
									
								
								
								
								
						
						
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Transferência Bancária
								</label>
								<div class="caption">
									<p>Ainda não habilitado.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Pagamento por Boleto
								</label>
								<div class="caption">
									<p>EM CONSTRUÇÃO...</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Sistema Paypal
								</label>
								<div class="caption">
									<p>Ainda não habilitado.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								Eu li e aceito os <a href="#">termos e condições</a>
							</label>
						</div>
						
						<?php  
						if (isset($_SESSION['login'])):
						?>
						<a href="pedidoFinalizado.php" class="primary-btn order-submit">Faça o pedido</a>
						<?php	
						else:													
						?>
						<a href="blankLogin.php" class="primary-btn order-submit" onclick="irLogin()">Faça o pedido</a>
						<?php	
						endif;
						?>
						<script>
						function irLogin(){
							alert("Você precisa estar logado para finalizar seu pedido")
						}
						</script>
						
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

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
								<p>Somos a ppets, a loja do seu animal.</p>
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
