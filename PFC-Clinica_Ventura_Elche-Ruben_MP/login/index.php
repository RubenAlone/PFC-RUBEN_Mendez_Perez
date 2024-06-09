<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->

<?php
include('../app/config.php');
include('../layouts/header-principal.php');
?>
<br><br><br>
<!--Agregamos el contenido de la página-->
<!-- ÁREA DE ACCESO -->
<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrap mb-0">
                    <div class="contact-form">
                        <div class="login-logo">
                            <a href="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/index2.html">
                                <!-- <b>Clínica Ventura Elche</b> -->
                                <img src="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.png" alt="logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera" width="100%">
                            </a>
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">INICIAR SESIÓN</p>
                                <form action="<?php echo $URL; ?>/app/controllers/login/controller_login.php" method="post">
                                    <label for="">Correo electrónico</label>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="">Contraseña</label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary" style="width: 100%; background-color:#95c11f">Acceder</button><br><br>
                                    <a href="<?php echo $URL ?>" class="btn btn-secondary" style="width: 100%;">Cancelar</a><br><br>

                                </form>
                                <!-- /.social-auth-links -->

                                <!-- <p class="mb-1">
                    <a href="forgot-password.html">He olvidado mi contraseña.</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Registro de nuevo usuario.</a>
                </p> -->
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div>
                    <!-- /.login-box -->

                    <!-- jQuery -->
                    <script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIN ÁREA DE REGISTRO -->

<!-- ÁREA DE CONTACTO -->
<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-envelope"></i>
                    <h3>Email:</h3>
                    <a href="mailto:info@clinicaventuraelche.com?subjet=Pedir información">info@clinicaventuraelche.com</a>
                    <a href="mailto:manoligagullo@gmail.com?subject=Pedir información">manoligagullo@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-location-plus"></i>
                    <h3>Dirección</h3>
                    Ptda. Altabix P-1, nº411 A 03291 Elche, España.
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-phone-call"></i>
                    <h3>Llámanos</h3>
                    <a href="tel:+(34)608203548">JULIO - Telf. 608203548</a>
                    <a href="tel:+(34)670340308">MANOLI - Telf. 670340308</a>
                    <a href="tel:+(34)607481975">CRISTIAN - Telf. 607481975</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-contact-info">
                    <i class="bx bx-phone-call"></i>
                    <h3>Llámanos</h3>
                    <a href="tel:+(34)606139784">FRANCISCO - Telf. 606139784</a>
                    <a href="tel:+(34)606649616">ISMAEL - Telf. 606649616</a>
                    <a href="tel:+(34)666310044">MAYSE - Telf. 666310044</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIN ÁREA DE CONTACTO -->

<!-- ÁREA DEL MAPA -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.714916924968!2d-0.6941195878636667!3d38.3092723717381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63b61955555555%3A0x803f62f0bbac75de!2sCl%C3%ADnica%20Ventura%20Elche!5e0!3m2!1ses!2ses!4v1701858966109!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- FIN DEL ÁREA DEL MAPA -->

<?php
include('../layouts/footer-principal.php');
?>
</body>

</html>