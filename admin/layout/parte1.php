<!--
IES. Albarregas - Mérida
Proyecto de Desarrollo de Aplicaciones Web
Alumno: Rubén Méndez Pérez - 2024
-->
<?php

session_start();
if (isset($_SESSION['sesion_email'])) {
  $email_sesion = $_SESSION['sesion_email'];
  $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion'";
  $query = $pdo->prepare($sql);
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($usuarios as $usuario) {
    $id_usuario = $usuario['id_usuario'];
    $cargo_sesion = $usuario['cargo'];
  }
} else {
  //echo "No ha pasado por el login";
  header('Location: ' . $URL . '/login');
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es-ES">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TITLE -->
  <title><?php echo APP_NAME; ?></title>
  <meta name="author" content="Rubén Méndez Pérez.2023">
  <meta name="copyright" content="Rubén Méndez Pérez.2023" />
  <meta name="description" content="Proyecto final de Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones Web">
  <meta name="generator" content="Proyecto final de Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones Web">
  <meta name="keywords" content="Proyecto final de Ciclo Formativo de Grado Superior de Desarrollo de Aplicaciones Web">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.jpg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!-- jQuery -->
  <script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!--LIBRERIA DE MENSAJES sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--LIBRERÍA ICONOS BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo $URL; ?>/admin" class="nav-link"><?php echo APP_NAME; ?></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <a href="<?php echo $URL . '/'; ?>index.php"><img src="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.jpg" class="img-circle elevation-2" alt="User Image"></a>
          </div>
          <div class="info">
            <a href="<?php echo $URL . '/'; ?>admin" class="d-block"><b>Bienvenido</b></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- LISTADO USUARIOS -->
            <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color:#95c11f">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/usuarios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/usuarios/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo usuario</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- LISTADO DE TERAPEUTAS -->
            <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color:#95c11f">
                <i class="bi bi-person-fill"></i>
                <p>&nbsp;
                  Terapeutas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/terapeutas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de Terapeutas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/terapeutas/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo Terapeutas</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- LISTADO SERVICIOS -->
            <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color:#95c11f">
                <i class="bi bi-life-preserver"></i>
                <p>&nbsp;
                  Servicios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de servicios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/servicios/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nuevo servicio</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- LISTADO DE CITAS -->
            <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color:#95c11f">
                <i class="bi bi-calendar-week"> </i>
                <p>&nbsp;
                  Citas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/reservas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Listado de reservas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo $URL; ?>/admin/reservas/create.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nueva reserva</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- CERRAR SESION -->
            <li class="nav-item">
              <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php" class="nav-link active" style="background-color:red">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                  Cerrar sesión
                </p>
              </a>
            </li>

            <!-- IR A LA WEB -->
            <li class="nav-item">
              <a href="<?php echo $URL; ?>/index.php" class="nav-link active" style="background-color:darkgreen" target="_blank">
              <i class="bi bi-globe"></i>
                <p> Ir a la web</p>
              </a>
            </li>          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content">