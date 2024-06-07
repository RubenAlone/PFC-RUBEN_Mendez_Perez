<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../app/config.php');
include('../../admin/layout/parte1.php');
$id_servicio = $_GET['id_servicio'];
include('../../app/controllers/servicios/datos_servicio.php'); ?>
<br>
<div class="container-fluid">
    <h1>Actualización de datos: <?php echo $nombre_servicio ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del servicio</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MODIFICACIÓN DE DATOS DEL servicio-->
                    <form action="../../app/controllers/servicios/update.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre_servicio">Nombre Servicio<b>*</b> </label>
                                    <input type="text" value="<?php echo $nombre_servicio ?>" class="form-control" name="nombre_servicio" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="duracion">Duración<b>*</b> </label>
                                    <input type="text" value="<?php echo $duracion ?>" class="form-control" name="duracion" required>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="precio">Precio del Servicio<b>*</b> </label>
                                    <input type="text" value="<?php echo $precio ?>" class="form-control" name="precio" required>
                                </div>
                                </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h6>(*) Campos obligatorios.</h6>
                            </div>
                        </div>
                        <!--OCULTAMOS CAMPO ID servicio, PARA PODER USARLO EN EL CONTROLADOR-->
                        <input type="text" name="id_servicio" value="<?php echo $id_servicio?>" hidden>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                <input type="submit" class="btn btn-success" value="Actualizar servicio"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
<?php
include('../../admin/layout/parte2.php');
include('../../admin/layout/mensaje.php');
?>