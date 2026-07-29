<!DOCTYPE html>
<html lang="es-Es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Demo</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/about.css"/>
    </head>
	<body>

		<div id="page-loader">
			<div class="loader-inner">
				<div class="loader-bars">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<p>Cargando...</p>
			</div>
		</div>

		<header>
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="tel:+56988636729"><i class="fa fa-phone"></i> (+56) 9 88636729</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> contacto@elias.cl</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Región Metropolitana, Chile</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a><i class="fa fa-dollar"></i> CLP</a></li>
						<!-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> -->
					</ul>
				</div>
			</div>

			<div id="header">
				<div class="container">
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo_principal.png" alt="logo principal">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<div class="col-md-6">
							<div class="header-search">
								<form>
									<!-- <select class="input-select">
										<option value="0">Categorías</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select> -->
									<input class="input" placeholder="¿Qué buscas?">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>

						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div>
									<a href="store.php">
										<i class="fa fa-shopping-bag i-carrito"></i>
										<span>Tienda</span>
										<!-- <div class="qty">2</div> -->
									</a>
								</div>

								<div>
									<a href="#">
										<i class="fa fa-instagram i-carrito"></i>
										<span>Instagram</span>
										<!-- <div class="qty">2</div> -->
									</a>
								</div>

								<!-- Carrito 
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
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
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div> -->

								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

<a href="https://wa.me/+56988636729" 
	class="float-whatsapp" 
	target="_blank">
	<i class="fa fa-whatsapp"></i>
</a>

<nav id="navigation">
			<div class="container">
				<div id="responsive-nav">
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Inicio</a></li>

						<li class="dropdown">
							<a href="store.php">Tienda <i class="fa fa-angle-down"></i></a>
							<span class="dropdown-toggle-mobile"><i class="fa fa-angle-down"></i></span>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a href="store.php?cat=difusores">Paneles Difusores</a>
									<span class="dropdown-toggle-mobile"><i class="fa fa-angle-down"></i></span>
									<ul class="dropdown-menu">
										<li><a href="store.php?cat=difusores&sub=qrd">Difusores QRD</a></li>
										<li><a href="store.php?cat=difusores&sub=skyline">Difusores Skyline</a></li>
										<li><a href="store.php?cat=difusores&sub=madera">Difusores de madera</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a href="store.php?cat=absorbentes">Paneles Absorbentes</a>
									<span class="dropdown-toggle-mobile"><i class="fa fa-angle-down"></i></span>
									<ul class="dropdown-menu">
										<li><a href="store.php?cat=absorbentes&sub=espuma">Espuma acústica</a></li>
										<li><a href="store.php?cat=absorbentes&sub=fibra-vidrio">Paneles de fibra de vidrio</a></li>
										<li><a href="store.php?cat=absorbentes&sub=bass-traps">Bass traps</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a href="store.php?cat=resonadores">Resonadores Acústicos</a>
									<span class="dropdown-toggle-mobile"><i class="fa fa-angle-down"></i></span>
									<ul class="dropdown-menu">
										<li><a href="store.php?cat=resonadores&sub=helmholtz">Resonadores Helmholtz</a></li>
										<li><a href="store.php?cat=resonadores&sub=perforados">Paneles perforados</a></li>
										<li><a href="store.php?cat=resonadores&sub=membrana">Resonadores de membrana</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="servicios.php">Servicios <i class="fa fa-angle-down"></i></a>
							<span class="dropdown-toggle-mobile"><i class="fa fa-angle-down"></i></span>
							<ul class="dropdown-menu">
								<li><a href="servicio-instalacion.php">Instalación</a></li>
								<li><a href="servicio-asesoria-tecnica.php">Asesoría Técnica</a></li>
								<li><a href="servicio-diagnostico-acustico.php">Diagnóstico Estudio Acústico</a></li>
							</ul>
						</li>

						<li><a href="acerca-de-nosotros.php">Nosotros</a></li>
						<li><a href="contacto.php">Contacto</a></li>
						<li><a href="#">PERSONALIZA TU PANEL</a></li>
					</ul>
				</div>
			</div>
		</nav>