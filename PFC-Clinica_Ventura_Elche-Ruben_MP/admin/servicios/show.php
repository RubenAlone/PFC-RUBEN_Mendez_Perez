<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../app/config.php');
include('../../admin/layout/parte1.php');
$id_servicio = $_GET['id_servicio'];
include('../../app/controllers/servicios/datos_servicio.php');
?>
<br>
<div class="container-fluid">
    <h1>Datos de <?php echo $nombre_servicio ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del servicio</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MOSTRAR DATOS DEL SERVICIO-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_servicio">Nombre</label>
                                <input type="text" value="<?php echo $nombre_servicio?>" class="form-control" name="nombre_servicio" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duracion">Duración</label>
                                <input type="text" value="<?php echo $duracion ?>" class="form-control" name="duracion" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="precio">Precio </label>
                                <input type="text" value="<?php echo $precio.'€';?>" class="form-control" name="precio" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <a href="index.php" class="btn btn-success">Volver</a>
                            </div>
                        </div>
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