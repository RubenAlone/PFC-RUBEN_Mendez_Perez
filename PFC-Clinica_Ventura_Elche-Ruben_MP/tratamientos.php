<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php

include('app/config.php');
include('layouts/header-principal.php');
?>

<!-- ÁREA DE TÍTULO -->
<!-- <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Tratamientos</h2>
            <ul>
                <li></li>
            </ul>
        </div>
    </div>
</div> -->
<!--FIN ÁREA-->
<div><br><br><br><br></div> 
<!-- Start Our Rooms Area -->
<section class="our-rooms-area pb-100">
    <div class="container">
    <div class="section-title">
            <br>
            <span>Nuestros Tratamientos</span>
            <h2>Diversidad</h2>
            <p>Tratamos variedad de dolencias, así como también disponemos de distintas técnicas para aliviar y cuidar la salud de nuestros clientes.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo $URL.'/'; ?>assets/img/tratamientos/6.jpg" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Masaje Terapéutico</h3>
                            <span class="price">Desde 20,00€</span>
                            <a href="<?php echo $URL.'/'; ?>tratamientos.php" class="btn btn-success">
                                Saber más
                                <i class="flaticon-right"></i>
                            </a>
                            <a href="<?php echo $URL.'/'; ?>terapeutas.php" class="default-btn">
                                Pide Cita
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo $URL.'/'; ?>assets/img/tratamientos/5.jpg" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Acupuntura</h3>
                            <span class="price">Desde 20,00€</span>
                            <a href="<?php echo $URL.'/'; ?>tratamientos.php" class="btn btn-success">
                                Saber más
                                <i class="flaticon-right"></i>
                            </a>
                            <a href="<?php echo $URL.'/'; ?>terapeutas.php" class="default-btn">
                                Pide Cita
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo $URL.'/'; ?>assets/img/tratamientos/7.jpg" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Fisioterapia</h3>
                            <span class="price">Desde 20,00€</span>
                            <a href="<?php echo $URL.'/'; ?>tratamientos.php" class="btn btn-success">
                                Saber más
                                <i class="flaticon-right"></i>
                            </a>
                            <a href="<?php echo $URL.'/'; ?>terapeutas.php" class="default-btn">
                                Pide Cita
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo $URL.'/'; ?>assets/img/tratamientos/9.jpg" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Osteopatía</h3>
                            <span class="price">Desde 20,00€</span>
                            <a href="<?php echo $URL.'/'; ?>tratamientos.php" class="btn btn-success">
                                Saber más
                                <i class="flaticon-right"></i>
                            </a>
                            <a href="<?php echo $URL.'/'; ?>terapeutas.php" class="default-btn">
                                Pide Cita
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo $URL.'/'; ?>assets/img/tratamientos/3.jpg" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Aromaterápia</h3>
                            <span class="price">Desde 20,00€</span>
                            <a href="<?php echo $URL.'/'; ?>tratamientos.php" class="btn btn-success">
                                Saber más
                                <i class="flaticon-right"></i>
                            </a>
                            <a href="<?php echo $URL.'/'; ?>terapeutas.php" class="default-btn">
                                Pide Cita
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-rooms-three-wrap">
                    <div class="single-rooms-three">
                        <img src="<?php echo $URL.'/'; ?>assets/img/tratamientos/10.jpg" alt="Image">
                        <div class="single-rooms-three-content">
                            <h3>Masaje Descontracturante</h3>
                            <span class="price">Desde 20,00€</span>
                            <a href="<?php echo $URL.'/'; ?>tratamientos.php" class="btn btn-success">
                                Saber más
                                <i class="flaticon-right"></i>
                            </a>
                            <a href="<?php echo $URL.'/'; ?>terapeutas.php" class="default-btn">
                                Pide Cita
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>



<?php
include('layouts/footer-principal.php');
?>
    </body>
</html>