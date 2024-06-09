<?php
//PFC - Rubén Méndez Pérez - 2024

include('../app/config.php');
include('../admin/layout/parte1.php');
include('../app/controllers/terapeutas/listado_terapeutas.php');
include('../app/controllers/usuarios/listado_usuarios.php');
include('../app/controllers/servicios/listado_servicios.php');
include('../app/controllers/reservas/listado_reservas.php');

?>
<br>

<div class="container-fluid" style="background-image: url(<?php echo $URL; ?>/assets/img/foto_bienvenida_clinica_ventura_elche.png); background-size:cover; background-repeat:no-repeat; height:auto;">
    <div class="container">
    <br>
    <h1>Bienvenido</h1>
        <!-- 
        <div class="row">
        <div class="col-md-12" style="background-image: url(<?php echo $URL; ?>/assets/img/foto_bienvenida_clinica_ventura_elche.png); background-size:cover; background-repeat:no-repeat; width:100%; height:300px;">
            <img src="<?php echo $URL; ?>/assets/img/foto_bienvenida_clinica_ventura_elche.png" alt="foto_bienvenida_clinica_ventura_elche" class="img-fluid" style="width: 25%";> 
        </div> 
        -->

    <div class="row">

        <!-- TERAPEUTAS -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <?php
                    $contador_terapeutas = 0;
                    foreach ($terapeutas as $terapeuta) {
                        $contador_terapeutas++;
                    } ?>
                    <h3><?= $contador_terapeutas ?></h3>
                    <p>Terapeutas Registrados</p>
                </div>
                <div class="icon">
                <i class="bi bi-person-fill"></i>
                </div>
                <a href="<?php echo $URL; ?>/admin/terapeutas" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- USUARIOS -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <?php
                    $contador_usuarios = 0;
                    foreach ($usuarios as $usuario) {
                        $contador_usuarios++;
                    } ?>
                    <h3><?= $contador_usuarios ?></h3>
                    <p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                <i class="nav-icon fas fa-users"></i>
                </div>
                <a href="<?php echo $URL; ?>/admin/usuarios" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- SERVICIOS -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <?php
                    $contador_servicios = 0;
                    foreach ($servicios as $servicio) {
                        $contador_servicios++;
                    } ?>
                    <h3><?= $contador_servicios ?></h3>
                    <p>Servicios Registrados</p>
                </div>
                <div class="icon">
                <i class="bi bi-life-preserver"></i>
                </div>
                <a href="<?php echo $URL; ?>/admin/servicios" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <!-- CITAS -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <?php
                    $contador_reservas = 0;
                    foreach ($reservas as $reserva) {
                        $contador_reservas++;
                    } ?>
                    <h3><?= $contador_reservas ?></h3>
                    <p>Citas Registradas</p>
                </div>
                <div class="icon">
                <i class="bi bi-calendar-week"> </i>
                </div>
                <a href="<?php echo $URL; ?>/admin/reservas" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
    
</div>

<?php
include('../admin/layout/parte2.php');
include('../admin/layout/mensaje.php');
?>