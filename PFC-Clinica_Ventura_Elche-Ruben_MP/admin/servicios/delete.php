<?php
//PFC - Rubén Méndez Pérez - 2024

$id_servicio = $_GET['id_servicio'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/servicios/datos_servicio.php');
?>
<br>
<div class="container-fluid">
    <h1>Eliminar Servicio: <?php echo $nombre_servicio ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title"><b>¿Desea eliminar los datos?</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MOSTRAR DATOS DEL servicio-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_servicio">Nombre Servicio</label>
                                <input type="text" value="<?php echo $nombre_servicio ?>" class="form-control" name="nombre_servicio" disabled>
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
                                <input type="text" value="<?php echo $precio ?>" class="form-control" name="precio" disabled>
                            </div>
                        </div>
                    </div>
                        <!--OCULTAMOS CAMPO ID servicio, PARA PODER USARLO EN EL CONTROLADOR-->
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="<?php echo $URL;?>/app/controllers/servicios/delete.php" method="post">
                                        <input type="text" name="id_servicio" value="<?php echo $id_servicio?>" hidden>
                                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar servicio</button>
                                    </form>
                                </div>
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