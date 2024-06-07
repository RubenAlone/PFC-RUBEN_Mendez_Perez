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
    <h1>Creación de nueva cita</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos de la Cita</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--FORMULARIO DE REGISTRO NUEVA CITA-->
                    <form action="../../app/controllers/citas/create.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_cliente">Nombre Cliente<b>*</b> </label>
                                    <input type="text" class="form-control" name="nombre_cliente" placeholder="Nombre Cliente" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="terapeuta">Terapeuta<b>*</b></label>
                                    <select name="terapetua" id="" class="form-control" required>
                                    <option value="Terapeuta_1">Terapeuta 1</option>
                                    <option value="Terapeuta_2">Terapeuta 2</option>
                                    <option value="Terapeuta_3">Terapeuta 3</option>
                                    <option value="Terapeuta_4">Terapeuta 4</option>
                                    <option value="Terapeuta_5">Terapeuta 5</option>
                                    <option value="Terapeuta_6">Terapeuta 6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="servicio">Servicio<b>*</b></label>
                                    <select name="servicio" id="" class="form-control" required>
                                    <option value="Servicio_1">Servicio 1</option>
                                    <option value="Servicio_2">Servicio 2</option>
                                    <option value="Servicio_3">Servicio 3</option>
                                    <option value="Servicio_4">Servicio 4</option>
                                    <option value="Servicio_5">Servicio 5</option>
                                    <option value="Servicio_6">Servicio 6</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dia">Día<b>*</b> </label>
                                    <input type="date" class="form-control" name="dia" placeholder="Día" required>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="hora">Hora<b>*</b> </label>
                                    <input type="text" class="form-control" name="hora" placeholder="Hora" required>
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
                                <input type="submit" class="btn btn-success" value="Registrar Cita"></input>
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