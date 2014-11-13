<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Timoti</title>
	<link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../Assets/css/main.css">
	<link href="../Assets/css/style2.css" rel="stylesheet" media="screen">
</head>
<body id="top" class="fullscreen-image-background" style="display: block;">

	<!--Login Modal iniciar sesion-->
	<div class="modal fade" id="loginModalIniciar" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X
					</button>
					<h2> Inicio de sesión </h2>
					<div class="alert alert-info" role="alert">
						<strong>¿YA ESTÁS REGISTRADO?</strong>
						<p>Recuerda que al ingresar con tu cuenta puedes acceder a grandes beneficios, todo esto diseñado exclusivamente para clientes registrados en nuestro portal Timoti.com</p>
					</div>
				</div>
				<div class="modal-body">
					<form method="post" data-parsley-validate>
						<div class="form-group group">
							<label for="correo">Correo electrónico</label>
							<input type="email" class="form-control" name="username" id="log-email" placeholder="email@ejemplo.com" required>
						</div>
						<div class="form-group group">
							<label for="contrasena">Contraseña</label>
							<input type="password" class="form-control" name="password" id="log-password" placeholder="*******" required>
							<a class="help-link" href="../Controller/ctrrecontra.php">Olvidaste tu contraseña?</a>
						</div>
						<input class="btn btn-success" type="submit" name="btn_login" value="Aceptar">
						<input class="btn btn-default" type="button" value="Cancelar" class="close" data-dismiss="modal" aria-hidden="true">
					</form>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- / FIN modal iniciar sesion -->

<!--Login Modal registrarse-->
<div class="modal fade" id="loginModalregistrate" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h2>Registrate</h2>
				<div class="alert alert-info" role="alert">
					<strong>¿Por qué deberia registrarme?</strong>
					<p>Tendrás los beneficios de una experiencia personalizada de compra. Con tu cuenta Timoti.com podrás hacer pedidos, crear tu perfil y revisar el estado de tus pedidos.</p>
				</div>
			</div>
			<div class="modal-body">
				<div class="alert alert-warning alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Atencion!</strong> En este momento solo realizamos pedidos en el barrio Villa Hermosa.
				</div>
				<form method="post" class="login-form" novalidate="novalidate" data-parsley-validate>
					<div class="col-md-6">
						<div class="form-group group">
							<label for="nombre">Nombre Completo</label>
							<input type="Text" class="form-control" name="txtnombre" id="" placeholder="Maria Duarte" required data-parsley-minlength="7">
						</div>
						<div class="form-group group">
							<label for="log-email">Correo electronico</label>
							<input type="email" class="form-control" name="txtmail" id="" placeholder="ejemplo@mail.com" required>
						</div>
						<div class="form-group group">
							<label for="barrio">Barrio</label>
							<input type="text" class="form-control" name="txtbarrio" placeholder="Aranjuez" required data-parsley-minlength="6">
						</div>
						<div class="form-group group">
							<label for="contrasena">Contraseña</label>
							<input type="password" class="form-control" name="txtcontrasena" id="cont" placeholder="*********" required data-parsley-minlength="6">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group group">
							<label for="identificacion">Idetificacion</label>
							<input type="text" class="form-control" name="txtidenti" placeholder="12345678" required data-parsley-type="number" data-parsley-minlength="7" >
						</div>	
						<div class="form-group group">
							<label for="direccion">Direccion de Residencia</label>
							<input type="Text" class="form-control" name="txtdir" id="" placeholder="Calle 00 # 00-00" required data-parsley-minlength="7">
						</div>
						<div class="form-group group">
							<label for="telefono">Telefono</label>
							<input type="integer" class="form-control" name="txttel" id="" placeholder="1234567" required data-parsley-type="number" data-parsley-minlength="7">
						</div>					
						<div class="form-group group">
							<label for="confirmarcontrasena">Confirmar contraseña</label>
							<input type="password" class="form-control" name="txtconfircon" placeholder="*********" required data-parsley-equalto="#cont">
						</div>
					</div>
					<input style="margin-left: 3%" class="btn btn-success" type="submit" value="Aceptar" name="btn_registro">
					<input class="btn btn-default" type="button" onclick="fake_load()" value="Cancelar" class="close" data-dismiss="modal" aria-hidden="true">
				</form>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- / FIN modal Registrarse -->


<!-- INICIO NAVBAR -->
<div class="navbar navbar-fixed-top navbar-light">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div >
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="../Controller/ctrindex.php" class="navbar-brand">
						<img src="../Assets/img/pagina/loguito.jpg" style="margin-top: -27px; width: 100%;height: 52px;">
					</a>
				</div>
			</div>
		</div>
		<nav class="navbar-collapse collapse" id="main-nav" role="navigation">

			<ul class="nav navbar-nav navbar-right nav-text-light">
				<li class="active"><a href="../Controller/ctrindex.php">INICIO</a></li>
				<li><a href="#categorias">CATEGORIAS</a></li>
				<li><a href="#contactenos">CONTACTENOS</a></li>
				<li><a href="#loginModalIniciar" data-toggle="modal" data-target="#loginModalIniciar">INICIO DE SESIÓN</a></li>
				<li><a href="#loginModalregistrate" data-toggle="modal" data-target="#loginModalregistrate">REGISTRATE</a></li>
				<li><a href="">CARRITO</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!-- FIN NAVBAR -->

<div class="page-content page-content-ease-in">
	<!-- INICIO PAGINA CONTENIDO-->
	<div class="page-content">
		<!--Inicio carrusel-->
		<!--Hero Slider-->
		<section class="hero-slider" style="position: relative;" id="inicio">
			<div id="carousel-generic" class="carousel slide" data-ride="carousel" style="width: 100%; height: 516px; left: 0px;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li>
					<li data-target="#carousel-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" style="height: 100%; opacity: 1;">
						<img src="../Assets/img/carrusel/bebidas.jpg" alt="3D Printer" style="width: 100%; height: 516px;">
						<div class="carousel-caption">
							<!-- contenido-->
						</div>
					</div>
					<div class="item">
						<img src="../Assets/img/carrusel/helados.jpg" alt="3D Printer" style="width: 100%; height: 516px;">
						<div class="carousel-caption">
							<!-- contenido-->
						</div>
					</div>
					<div class="item">
						<img src="../Assets/img/carrusel/dulces.jpg" alt="3D Printer" style="width: 100%; height: 516px;">
						<div class="carousel-caption">
							<!-- contenido-->
						</div>
					</div>
				</div>
			</div>
			<!--fin carrusel-->
		</section><!--Hero Slider Close-->


		<!--Categorias-->
		<section class="cat-tiles" id="categorias">
			<div class="container">
				<h1 style="text-align: center;">Navegar por categorias</h1>
				<!-- Inicio seccion Categorias-->
				<div class="row">
					<!--Categoria-->
					<div class="category col-lg-1 col-md-1 col-sm-4 col-xs-3">
					</div>
					<!--Categoria-->
					<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a href="papeleria.html">
							<img src="../Assets/img/catalogo/papeleria1OK.png" alt="1">
							<p>Papeleria</p>
						</a>
					</div>
					<!--Categoria-->
					<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a href="helados.html">
							<img src="../Assets/img/catalogo/heladeria10OK.png" alt="2">
							<p>Helados</p>
						</a>
					</div>
					<!--Categoria-->
					<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a href="dulces.html">
							<img src="../Assets/img/catalogo/confiteria1OK.png" alt="3">
							<p>Dulces</p>
						</a>
					</div>
					<!--Categoria-->
					<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a href="bebidas.html">
							<img src="../Assets/img/catalogo/bebidas1OK.png" alt="4">
							<p>Bebidas</p>
						</a>
					</div>
					<!--Categoria-->
					<div class="category col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a href="otros.html">
							<img src="../Assets/img/catalogo/otros1OK.png" alt="5">
							<p>Otros</p>
						</a>
					</div>
					<!--Categoria-->
					<div class="category col-lg-1 col-md-1 col-sm-4 col-xs-6">
					</div>
				</div>
				<!-- Fin seccion Categorias-->
			</div>
		</section><!--Fin Categorias-->

		<!-- CONTACTENOS -->
		<section>
			<!-- CONTACT -->
			<div id="contactenos" class="section contact">
				<div class="section-heading">
					<h1>Ponte en contacto</h1>
					<p>Escribe un mensaje con tus inquietudes, sugerencias o reclamos</p>
					<hr>
				</div>
				<div class="section-content">
					<div class="container">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="contact-form">
									<div class="alert"></div>
									<form id="contact-form" method="post" role="form" novalidate="">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="name" style="display: inline-block;margin-bottom: 12px;">Nombre:</label>	
													<input type="text" id="name" class="form-control parsley-validated" name="name" placeholder="" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group group">
													<label for="email" style="display: inline-block;margin-bottom: 12px;">Correo electronico:</label>
													<input type="email" id="email" class="form-control parsley-validated" name="email" placeholder="email@ejemplo.com" required="">
												</div>
											</div>
										</div>
										<div class="form-group group">
											<label for="subject" style="display: inline-block;margin-bottom: 12px;">Asunto:</label>
											<input type="text" id="subject" class="form-control" name="subject" placeholder="">
										</div>
										<div class="form-group group">
											<label for="message" style="display: inline-block;margin-bottom: 12px;">Mensaje:</label>
											<textarea id="message" name="message" class="form-control parsley-validated" placeholder="" required=""></textarea>
										</div>
										<button type="submit" class="btn btn-primary btn-lg" id="submit-button">
											<i class="fa loading-icon"></i> <span>Enviar</span>
										</button>
										<input type="hidden" name="msg-submitted" id="msg-submitted" value="true"> 
									</form>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTACT -->
		</section>
		<!-- FIN CONTACTENOS -->
		<!--fin contenido chat-->

	</div>
	<!-- /#page-wrapper -->
	<!-- FIN PAGINA CONTENIDO -->

</div>

<script src="../Assets/js/jquery.min.js"></script>
<script src="../Assets/js/bootstrap.min.js"></script>
<script src="../Assets/js/masterslider.min.js"></script>
<script src="../Assets/js/parsley.js"></script>
</body>
</html>