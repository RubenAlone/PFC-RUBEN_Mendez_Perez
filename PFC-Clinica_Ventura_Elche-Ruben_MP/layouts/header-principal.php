<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->

<?php

session_start();
$email_sesion = "";
if (isset($_SESSION['sesion_email'])) {
	$email_sesion = $_SESSION['sesion_email'];
	$sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion'";
	$query = $pdo->prepare($sql);
	$query->execute();
	$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
	foreach ($usuarios as $usuario) {
		$id_usuario_sesion = $usuario['id_usuario'];
		$cargo_sesion = $usuario['cargo'];
		$nombre_completo_sesion = $usuario['nombre_completo'];
		$email_sesion = $usuario['email'];
		$telefono_sesion = $usuario['telefono'];
	}
} else {
	//echo "no ha pasado";
	//header('Location: ' . $URL . '/login');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo APP_NAME; ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

	<meta name="author" content="Rubén Méndez Pérez.2024">
	<meta name="copyright" content="Rubén Méndez Pérez.2024" />
	<meta name="description" content="Proyecto final de Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones Web">
	<meta name="generator" content="Visual Studio Code">
	<meta name="keywords" content="Proyecto final de Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones Web">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.jpg">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/bootstrap.min.css">
	<!-- Owl Theme Default Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/owl.theme.default.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/owl.carousel.min.css">
	<!-- Boxicons Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/boxicons.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/flaticon.css">
	<!-- Meanmenu Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/meanmenu.min.css">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/animate.min.css">
	<!-- Nice Select Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/nice-select.min.css">
	<!-- Odometer Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/odometer.min.css">
	<!-- Date Picker CSS-->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/date-picker.min.css">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/magnific-popup.min.css">
	<!-- Beautiful Fonts CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/beautiful-fonts.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/style.css">
	<!-- Dark CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/dark.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?php echo $URL; ?>/assets/css/responsive.css">

	<!--LIBRERIA DE MENSAJES sweetalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- FULL CALENDAR -->
	<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales/es.js'></script>

</head>

<body>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Ecorik Navbar Area -->
	<div class="eorik-nav-style fixed-top">
		<div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="<?php echo $URL . '/'; ?>index.php" class="logo">
					<img src="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.png" alt="logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera">
				</a>
			</div>
			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<nav class="navbar navbar-expand-md navbar-dark">
					<div class="container">
						<a class="navbar-brand" href="<?php echo $URL . '/'; ?>index.php">
							<img src="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.png" alt="logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera">
						</a>
						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a href="<?php echo $URL . '/'; ?>index.php" class="nav-link active">
										Inicio
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo $URL . '/'; ?>tratamientos.php" class="nav-link">
										Tratamientos
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo $URL . '/'; ?>" class="nav-link">
										Blog
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo $URL . '/'; ?>contacto.php" class="nav-link">
										Contacto
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo $URL . '/'; ?>terapeutas.php" class="nav-link">
										Cita online
									</a>
								</li>

								<li class="nav-item">
									<?php
									if ($email_sesion == "") { ?>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle btn btn-outline access" role="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
											<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
											<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
										</svg> Iniciar sesión </a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="<?php echo $URL . '/'; ?>login/registro.php">Registro</a></li>
										<li><a class="dropdown-item" href="<?php echo $URL . '/'; ?>login/index.php">Login</a></li>
									</ul>
								</li>
							<?php
									} else { ?>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle btn btn-outline access" role="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
											<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
											<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
										</svg> Logueado </a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php">Cerrar sesión</a></li>
									</ul>
								</li>
							<?php
									}
							?>

							</li>
							</ul>
							<!-- Start Other Option -->
							<div class="others-option">
								<a class="call-us" href="https://wa.me/34670340308" target="_blank">
									<i class="bx bx-phone-call bx-tada"></i>
									+34 670 340 308
								</a>
							</div>
							<!-- End Other Option -->
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Ecorik Navbar Area -->