<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../app/config.php');
include('../../admin/layout/parte1.php');
$id_terapeuta = $_GET['id_terapeuta'];
include('../../app/controllers/terapeutas/datos_terapeuta.php');
?>
<br>
<div class="container-fluid">
    <h1>Eliminar Terapeuta: <?php echo $nombre_completo ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title"><b>¿Desea eliminar los datos?</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MOSTRAR DATOS DEL USUARIO-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_completo">Nombre Completo</label>
                                <input type="text" value="<?php echo $nombre_completo ?>" class="form-control" name="nombre_completo" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" value="<?php echo $email ?>" class="form-control" name="email" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="number" value="<?php echo $telefono ?>" class="form-control" name="telefono" disabled>
                            </div>
                        </div>
                    </div>
                        <!--OCULTAMOS CAMPO ID USUARIO, PARA PODER USARLO EN EL CONTROLADOR-->
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="<?php echo $URL;?>/app/controllers/terapeutas/delete.php" method="post">
                                        <input type="text" name="id_terapeuta" value="<?php echo $id_terapeuta?>" hidden>
                                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar Terapeuta</button>
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