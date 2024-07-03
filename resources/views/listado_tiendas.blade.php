<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

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
                    <li><a href="#"><i class="fa fa-phone"></i> celular +56991304465 </a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> mail circularfashionchile@gmail.com </a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                </ul>
                <ul class="header-links pull-right">
                    
                    <li><a href="#"><i class="fa fa-user-o"></i> Mi Cuenta</a></li>
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
                            <a href="#" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <!--<select class="input-select" style="width: 200px;">
                                    <option value="0">Todas las Categorias</option>
                                    <option value="1">Tiendas de Ropa Usada</option>
                                    <option value="1">Tiendas de Reciclaje</option>
                                    <option value="1">Reparación de Ropa Usada </option>
                            
                                    
                                </select>-->
                                <input style="width: 200px;" class="input" placeholder="Buscar aquí">
                                <button class="search-btn" style="width: 70px;">Buscar</button>
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
                                    <span>Mejores Tiendas</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
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
                    <li class="active"><a href=".">Inicio</a></li>
                    <li><a href="#">Mejores Tiendas</a></li>
                    <li><a href="tiendas">Todas las Tiendas</a></li>
                    <li><a href="#">Quienes Somos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Como registrar tienda</a></li>
                    <li><a href="#">Precios</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Listador de tiendas</h3>
						<ul class="breadcrumb-tree">
							<li><a href=".">Home</a></li>
							<li class="active">Tiendas</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
<!-- Products tab & slick -->

<table border="0">
    <tr>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product01.png" alt="">
                    <div class="product-label">
                        <span class="sale">Metropolitana</span>
                        <span class="new">Destacada</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>Reciclaup</p>
                    <h3 class="product-name"><a href="#">Tienda de ropa usada  de mujer, niño y bebé                    </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product02.png" alt="">
                    <div class="product-label">
                        <span class="sale">Concepcion</span>
                        <span class="new">Nueva</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>Mandi Moda                    </p>
                    <h3 class="product-name"><a href="#">Hacemos circular y reciclamos, convirtiendo aquellas prendas que no se logran hacer circular.                    </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
        <td style="width: 300px; height: 100px;"<!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product03.png" alt="">
                    <div class="product-label">
                        <span class="sale">Bulnes</span>
                        <span class="new">Nueva</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>Vestiale SpA                    </p>
                    <h3 class="product-name"><a href="#">Recuperamos textiles en desuso para transformarlos en bolsos, carteras, mochilas y accesorios únicos, exclusivos y sustentables.                     </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product04.png" alt="">
                    <div class="product-label">
                        <span class="sale">Rancagua</span>
                        <span class="new">Descatada</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b> Patio Frida By Monona Muller </p>
                    <h3 class="product-name"><a href="#">Tienda sustentable amigable con el medio ambiente,  venta de vestuario intervenido , customizado  , segunda mano o nuevo , Arte enfocado al diseño y recursos sostenibles . Moda circular .                    </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
    </tr>
    <tr>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product05.png" alt="">
                    <div class="product-label">
                        <span class="sale">santiago</span>
                        <span class="new">Nueva</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>DUV dale una vuelta                     </p>
                    <h3 class="product-name"><a href="#">Comercialización de prendas de segunda mano                     </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product06.png" alt="">
                    <div class="product-label">
                        <span class="sale">Arica</span>
                        <span class="new">Nueva</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>Baúl Renueva                     </p>
                    <h3 class="product-name"><a href="#">Venta de ropa de segunda mano.                     </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product07.png" alt="">
                    <div class="product-label">
                        <span class="sale">Maule</span>
                        <span class="new">Nueva</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>Polita                    </p>
                    <h3 class="product-name"><a href="#">Bastas ,zurcido ,confección de mantel para mesa ,carpeta                    </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
        <td style="width: 300px; height: 100px;"><!-- product -->
            <div class="product">
                <div class="product-img">
                    <img src="./img/product08.png" alt="">
                    <div class="product-label">
                        <span class="sale">Valparaiso</span>
                        <span class="new">Nueva</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category"><b>Tienda: </b>El Ropero de Maluc                     </p>
                    <h3 class="product-name"><a href="#">Vendo ropa europea categoría Premium, principalmente en forma física, pero también a través de instagram.                     </a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Visitar</button>
                </div>
            </div>
            <!-- /product --></td>
    </tr>
</table>
                    

                
<!-- Products tab & slick -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Suscríbete al<strong>BOLETÍN</strong></p>
							<form>
								<input class="input" type="email" placeholder="Ingrese E-Mail">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i>  Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

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
								<h3 class="footer-title">SOBRE NOSOTROS</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
									<li><a href="#"><i class="fa fa-phone"></i>celular +56991304465 </a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>mail circularfashionchile@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">CATEGORÍAS</h3>
								<ul class="footer-links">
									<li><a href="#">Reparacion de ropa Bebe </a></li>
									<li><a href="#">Reparacion de ropa Mujer </a></li>
									<li><a href="#">Reparacion de ropa hombre </a></li>
									<li><a href="#">Reparacion de ropa Zapatos </a></li>

								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">INFORMACIÓN</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre nosotros</a></li>
									<li><a href="#">Contáctenos</a></li>
									<li><a href="#">política de privacidad</a></li>
									<li><a href="#">Términos y condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">SERVICIO</h3>
								<ul class="footer-links">
									<li><a href="#">Mi Cuenta</a></li>
									<li><a href="#">Mis tienda</a></li>
									<li><a href="#">ayuda</a></li>
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