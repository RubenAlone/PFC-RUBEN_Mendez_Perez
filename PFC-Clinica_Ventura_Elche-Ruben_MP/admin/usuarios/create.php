<?php
//PFC - Rubén Méndez Pérez - 2023

include('../../app/config.php');
include('../../admin/layout/parte1.php'); ?>
<br>
<div class="container-fluid">
    <h1>Creación de nuevo usuario</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos del Usuario</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!--FORMULARIO DE REGISTRO NUEVO USUARIO-->
                    <form action="../../app/controllers/usuarios/create.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_completo">Nombre Completo<b>*</b> </label>
                                    <input type="text" class="form-control" name="nombre_completo" placeholder="Nombre Completo" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">Dirección<b>*</b> </label>
                                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- TIPO DE ROL -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tipo de Acceso </label>
                                    <select name="cargo" id="" class="form-control">
                                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                        <option value="CLIENTE">CLIENTE</option>
                                    </select>
                                </div>
                            </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telefono">Teléfono<b>*</b> </label>
                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Correo Electrónico<b>*</b> </label>
                                    <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Contraseña<b>*</b> </label>
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Verificar Contraseña<b>*</b> </label>
                                    <input type="password" class="form-control" name="password_verify" placeholder="Verificar Contraseña" required>
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
                                <input type="submit" class="btn btn-success" value="Registrar Usuario"></input>
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