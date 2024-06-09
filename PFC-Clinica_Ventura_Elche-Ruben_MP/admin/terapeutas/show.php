<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../app/config.php');
include('../../admin/layout/parte1.php');
$id_terapeuta = $_GET['id_terapeuta'];
include('../../app/controllers/terapeutas/datos_terapeuta.php');
?>
<br>
<div class="container-fluid">
    <h1>Datos de <?php echo $nombre_completo ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del Terapeuta</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MOSTRAR DATOS DEL USUARIO-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre_completo">Nombre Completo<b>*</b> </label>
                                <input type="text" value="<?php echo $nombre_completo ?>" class="form-control" name="nombre_completo" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" value="<?php echo $email ?>" class="form-control" name="email" disabled>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Teléfono<b>*</b> </label>
                                <input type="text" value="<?php echo $telefono ?>" class="form-control" name="telefono" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" value="<?php echo $direccion ?>" class="form-control" name="direccion" disabled>
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