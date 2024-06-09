<?php
//PFC - Rubén Méndez Pérez - 2023

include('../../app/config.php');
include('../../admin/layout/parte1.php');
$id_usuario = $_GET['id_usuario'];
include('../../app/controllers/usuarios/datos_usuario.php');
?>
<br>
<div class="container-fluid">
    <h1>Eliminar Usuario: <?php echo $nombre_completo ?></h1>
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
                                <label for="">Tipo de Acceso </label>
                                <input type="email" value="<?php echo $cargo ?>" class="form-control" name="cargo" disabled>
                            </div>
                        </div>
                    </div>
                        <!--OCULTAMOS CAMPO ID USUARIO, PARA PODER USARLO EN EL CONTROLADOR-->
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="<?php echo $URL;?>/app/controllers/usuarios/delete.php" method="post">
                                        <input type="text" name="id_usuario" value="<?php echo $id_usuario?>" hidden>
                                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar Usuario</button>
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