<?php 
	session_start(); 
	include_once("php/conexaoSQL.php"); 
	
	function select($classificacao){
		
		$sql = "SELECT cod_produto,produto,categoria,classificacao,nome,valor FROM produto where classificacao = '$classificacao' ";
		return $sql;
	}
 	
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

		<!-- NAVIGATION -->
		<nav id="navigation">

			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
								<li data-target="#demo" data-slide-to="3"></li>
								<li data-target="#demo" data-slide-to="4"></li>
								<li data-target="#demo" data-slide-to="5"></li>
							</ul>
							
							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="img/gatos2.png" alt="Gatos" width="1100" height="500">
								</div>
								<div class="carousel-item">
									<img src="img/cachorros.jpg" alt="Cachorros" width="1100" height="500">
								</div>
								<div class="carousel-item">
									<img src="img/roedores-domesticos.jpg" alt="Roedores" width="1100" height="500">
								</div>
								<div class="carousel-item">
									<img src="img/cachorros4.png" alt="Cachorros" width="1100" height="500">
								</div>
								<div class="carousel-item">
									<img src="img/gatos1.jpg" alt="Gatos" width="1100" height="500">
								</div>
								<div class="carousel-item">
									<img src="img/cachorro1.png" alt="Cachorros" width="1100" height="500">
								</div>
							</div>
							
							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br></h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mais Vendidos - Cachorros</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Limpeza</a></li>
									<li><a data-toggle="tab" href="#tab1">Alimentação</a></li>
									<li><a data-toggle="tab" href="#tab1">Lazer</a></li>
									<li><a data-toggle="tab" href="#tab1">Acessorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products 1 CACHORROS -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									<?php 
											try {
												
												$sql = select('cachorro');
												$result=mysqli_query($conn,$sql);
												while ($row=mysqli_fetch_object($result)) {
												?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="product.php?id=<?php echo $row->cod_produto;?>">
											
												<img src="img/<?php echo $row->produto;?>" alt='' width='200' height='200'>
												
												</a>
												<div class="product-label">
													
													<span class="new">Novo</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $row->categoria;?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $row->cod_produto;?>"><?php echo $row->nome;?></a></h3>
												<h4 class="product-price">R$ <?php echo $row->valor;?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho</button>
											</div>
										</div>
										<?php
												}
											} catch (Exception $th) {
												echo "Não foi possivel exibir produto";
												echo $th;
											}
										
										
											
											
										?>
										<!-- /product -->

										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

		<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mais Vendidos - Gatos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Limpeza</a></li>
									<li><a data-toggle="tab" href="#tab1">Alimentação</a></li>
									<li><a data-toggle="tab" href="#tab1">Lazer</a></li>
									<li><a data-toggle="tab" href="#tab1">Acessorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									<?php 
											try {
												$sql = select('gato');
												$result=mysqli_query($conn,$sql);
												while ($row=mysqli_fetch_object($result)) {
												?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="product.php?id=<?php echo $row->cod_produto;?>">
											
												<img src="img/<?php echo $row->produto;?>" alt='' width='200' height='200'>
												
												</a>
												<div class="product-label">
													
													<span class="new">Novo</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $row->categoria;?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $row->cod_produto;?>"><?php echo $row->nome;?></a></h3>
												<h4 class="product-price">R$ <?php echo $row->valor;?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho</button>
											</div>
										</div>
										<?php
												}
											} catch (Exception $th) {
												echo "Não foi possivel exibir produto";
												echo $th;
											}
										
										
											
											
										?>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

		<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mais Vendidos - Peixes</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Limpeza</a></li>
									<li><a data-toggle="tab" href="#tab1">Alimentação</a></li>
									<li><a data-toggle="tab" href="#tab1">Lazer</a></li>
									<li><a data-toggle="tab" href="#tab1">Acessorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									<?php 
											

											try {
												$sql = select('peixe');
												$result=mysqli_query($conn,$sql);
												while ($row=mysqli_fetch_object($result)) {
												?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="product.php?id=<?php echo $row->cod_produto;?>">
											
												<img src="img/<?php echo $row->produto;?>" alt='' width='200' height='200'>
												
												</a>
												<div class="product-label">
													
													<span class="new">Novo</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $row->categoria;?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $row->cod_produto;?>"><?php echo $row->nome;?></a></h3>
												<h4 class="product-price">R$ <?php echo $row->valor;?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho</button>
											</div>
										</div>
										<?php
												}
											} catch (Exception $th) {
												echo "Não foi possivel exibir produto";
												echo $th;
											}
										
										
											
											
										?>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

		<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mais Vendidos - Pássaros</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Limpeza</a></li>
									<li><a data-toggle="tab" href="#tab1">Alimentação</a></li>
									<li><a data-toggle="tab" href="#tab1">Lazer</a></li>
									<li><a data-toggle="tab" href="#tab1">Acessorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									<?php 
											
											
											


											try {
												$sql = select('passaro');
												$result=mysqli_query($conn,$sql);
												while ($row=mysqli_fetch_object($result)) {
												?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="product.php?id=<?php echo $row->cod_produto;?>">
											
												<img src="img/<?php echo $row->produto;?>" alt='' width='200' height='200'>
												
												</a>
												<div class="product-label">
													
													<span class="new">Novo</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $row->categoria;?></p>
												<h3 class="product-name"><a href="product.php?id=<?php echo $row->cod_produto;?>"><?php echo $row->nome;?></a></h3>
												<h4 class="product-price">R$ <?php echo $row->valor;?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho</button>
											</div>
										</div>
										<?php
												}
											} catch (Exception $th) {
												echo "Não foi possivel exibir produto";
												echo $th;
											}
										
										
											
											
										?>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

		<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mais Vendidos - Roedores</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Limpeza</a></li>
									<li><a data-toggle="tab" href="#tab1">Alimentação</a></li>
									<li><a data-toggle="tab" href="#tab1">Lazer</a></li>
									<li><a data-toggle="tab" href="#tab1">Acessorios</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									<?php 
											try {
												$sql = select('roedor');
												$result=mysqli_query($conn,$sql);
												while ($row=mysqli_fetch_object($result)) {
												?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
											<a href="product.php?id=<?php echo $row->cod_produto;?>">
											
												<img src="img/<?php echo $row->produto;?>" alt='' width='200' height='200'>
												
												</a>
												<div class="product-label">
													
													<span class="new">Novo</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $row->categoria;?></p>
												<h3 class="product-name"><a href="product.php"><?php echo $row->nome;?></a></h3>
												<h4 class="product-price">R$ <?php echo $row->valor;?></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i> Adicionar ao Carrinho</button>
											</div>
										</div>
										<?php
												}
											} catch (Exception $th) {
												echo "Não foi possivel exibir produto";
												echo $th;
											}
										?>
										<!-- /product -->

										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Oferta bombastica dessa semana</h2>
							<p>Produtos com até 50% de desconto!</p>
							<a class="primary-btn cta-btn" href="#">Comprar agora</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

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
