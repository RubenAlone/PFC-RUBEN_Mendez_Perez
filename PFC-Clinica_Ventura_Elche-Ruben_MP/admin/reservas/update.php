<!--
IES. Albarregas - Mérida
Proyecto de Desarrollo de Aplicaciones Web
Alumno: Rubén Méndez Pérez - 2024
-->
<?php

$id_reserva = $_GET['id_reserva'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/reservas/listado_reservas.php'); ?>
<br>
<div class="container-fluid">
<h1>Actualizar la  Reserva de <?php echo $reserva['nombre_cliente']?></h1>
<div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del Usuario</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--MOSTRAR DATOS DE LA RESERVA-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre_completo">Nombre Cliente</label>
                                <input type="text" value="<?php echo $reserva['nombre_cliente']?>" class="form-control" name="nombre_completo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="terapeuta">Terapeuta</label>
                                <input type="text" value="<?php echo $reserva['nombre_terapeuta']?>" class="form-control" name="terapeuta">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Servicio</label>
                                <input type="servicio" value="<?php echo $reserva['nombre_servicio']?>" class="form-control" name="servicio">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="f_reserva">Fecha del servicio</label>
                                <input type="date" value="<?php echo $reserva['f_reserva']?>" class="form-control" name="f_reserva">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="h_reserva">Hora del servicio</label>
                                <input type="text" value="<?php echo $reserva['h_reserva']?>" class="form-control" name="h_reserva">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="text" value="<?php echo $reserva['precio'].' €'?>" class="form-control" name="precio">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="number" value="<?php echo $reserva['estado']?>" class="form-control" name="estado" min=0 max=1>
                            </div>
                        </div>
                    </div>
                        <!--OCULTAMOS CAMPO ID USUARIO, PARA PODER USARLO EN EL CONTROLADOR-->
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="<?php echo $URL;?>/app/controllers/reservas/update.php" method="post">
                                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-trash"></i> Actualizar la Reserva</button>
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