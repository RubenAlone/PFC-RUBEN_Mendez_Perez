<!--
IES. Albarregas - Mérida
Proyecto de Desarrollo de Aplicaciones Web
Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php'); ?>
<br>
<div class="container-fluid">
    <h1>Creación de nuevo servicio</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del Servicio</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--FORMULARIO DE REGISTRO NUEVO SERVICIO-->
                    <form action="../../app/controllers/servicios/create.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre_servicio">Nombre del Servicio<b>*</b> </label>
                                    <input type="text" class="form-control" name="nombre_servicio" placeholder="Nombre del Servicio" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="duracion">Duración<b>*</b> </label>
                                    <input type="time" class="form-control" name="duracion" placeholder="Duración" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="precio">Precio<b>*</b> </label>
                                    <input type="number" class="form-control" name="precio" placeholder="Precio" required>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                               <h6>(*) Campos obligatorios.</h6> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                <input type="submit" class="btn btn-success" value="Registrar servicio"></input>
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