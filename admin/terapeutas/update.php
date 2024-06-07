<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../app/config.php');
include('../../admin/layout/parte1.php');
$id_terapeuta = $_GET['id_terapeuta'];
include('../../app/controllers/terapeutas/datos_terapeuta.php'); ?>
<br>
<div class="container-fluid">
    <h1>Actualización de datos de: <?php echo $nombre_completo ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del Terapeuta</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MODIFICACIÓN DE DATOS DEL TERAPEUTA-->
                    <form action="../../app/controllers/terapeutas/update.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_completo">Nombre Completo<b>*</b> </label>
                                    <input type="text" value="<?php echo $nombre_completo ?>" class="form-control" name="nombre_completo" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" value="<?php echo $email ?>" class="form-control" name="email" placeholder="Correo Electrónico" disabled>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección<b>*</b> </label>
                                    <input type="text" value="<?php echo $direccion ?>" class="form-control" name="direccion" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="number" value="<?php echo $telefono ?>" class="form-control" name="telefono" placeholder="Telefono">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" name="password" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Verificar Contraseña</label>
                                    <input type="password" class="form-control" name="password_verify">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h6>(*) Campos obligatorios.</h6>
                            </div>
                        </div>
                        <!--OCULTAMOS CAMPO ID USUARIO, PARA PODER USARLO EN EL CONTROLADOR-->
                        <input type="text" name="id_terapeuta" value="<?php echo $id_terapeuta?>" hidden>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                <input type="submit" class="btn btn-success" value="Actualizar Terapeuta"></input>
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