<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('app/config.php');
include('layouts/header-principal.php');
include('app/controllers/terapeutas/listado_terapeutas.php');
?>


<!-- ÁREA ESPECIALISTAS-->
<section class="expert-team-area ptb-100">
    <div class="container">
        <div class="section-title">
            <br>
            <span>Nuestro Equipo</span>
            <h2>Terapeutas Expertos</h2>
            <p>Contamos con un equipo de terapeutas especializados instaurados en Elche desde hace más de 20 años, siempre en constante formación y evolución. </p>
        </div>

        <div class="row">
            <?php
            foreach ($terapeutas as $i=>$terapeuta) {?>
               
               <div class="col-lg-4 col-sm-6">
                <div class="single-team">
                    <img src="<?php echo $URL; ?>/assets/img/team/terapeuta_clinica_ventura_elche_<?php echo $i+1?>.png" alt="terapeuta_clinica_ventura_elche">
                    <div class="team-content">
                    <h3><?php echo $terapeuta['nombre_completo']?></h3>
                        <b><a href="<?php echo $URL . '/'; ?>reservas/reservas.php?id_terapeuta=<?php echo $terapeuta['id_terapeuta'] ?>&nombre_completo=<?php echo $terapeuta['nombre_completo'] ?>" class="nav-link">Pedir cita</a></b>
                    </div>
                </div>
            </div>
                    
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- FIN ÁREA -->

<!-- ÁREA SERVICIOS EXTRA -->
<section class="facilities-area pb-60">
    <div class="container">
        <div class="section-title">
            <span>Facilidades</span>
            <h2>Servicios Extras</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-pickup"></i>
                        <h3>Nos desplazamos​</h3>
                        <p>Consultas a pacientes con dificultades de movilidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-coffee-cup"></i>
                        <h3>Té de Bienvenida​​​​</h3>
                        <p>Para comiencar los tratamientos muy relajados.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-garage"></i>
                        <h3>​​Parking</h3>
                        <p>Disponemos de un amplio parking para nuestros clientes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-facilities-wrap">
                    <div class="single-facilities">
                        <i class="facilities-icon flaticon-water"></i>
                        <h3>Agua Fría y Caliente​</h3>
                        <p>Para el desarrollo de algunas terápias.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIN ÁREA -->

<!-- ÁREA TESTIMONIOS -->
<section class="testimonials-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonios</span>
            <h2>¿Qué opinan nuestros clientes?</h2>
        </div>
        <div class="testimonials-wrap owl-carousel owl-theme">
            <div class="single-testimonials" style="height: 350px; border-radius:25px">
                <ul>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                    <li><i class="bx bxs-star"></i></li>
                </ul>
                <h3>Profesionales altamente calificados</h3>
                <p>“El personal de este centro de fisioterapia es increíblemente competente y muestra un alto nivel de conocimiento en todas las áreas de rehabilitación.”</p>
                <div class="testimonials-content">
                    <img src="<?php echo $URL; ?>/assets/img/testimonials/2.png" alt="Testimonios_Clinica_Ventura_Elche">
                    <h4>Estefanía Jurado</h4>
                    <span></span>
                </div>
            </div>
            <div class="single-testimonials" style="height: 350px; border-radius:25px">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Trato personalizado y amable</h3>
                <p>“Me impresionó la atención personalizada que recibí en cada sesión. El equipo se preocupa por cada paciente y crea un ambiente cálido y acogedor.”</p>
                <div class="testimonials-content">
                    <img src="<?php echo $URL; ?>/assets/img/testimonials/3.png" alt="Testimonios_Clinica_Ventura_Elche">
                    <h4>Pedro López</h4>
                    <span></span>
                </div>
            </div>
            <div class="single-testimonials" style="height: 350px; border-radius:25px">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Resultados positivos</h3>
                <p>“Después de varias sesiones, he experimentado una mejora significativa en mi condición. El enfoque integral del tratamiento realmente marca la diferencia.”</p>
                <div class="testimonials-content">
                    <img src="<?php echo $URL; ?>/assets/img/testimonials/1.png" alt="Testimonios_Clinica_Ventura_Elche">
                    <h4>María Llanes</h4>
                    <span></span>
                </div>
            </div>
            <div class="single-testimonials" style="height: 350px; border-radius:25px">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Instalaciones modernas y bien equipadas</h3>
                <p>“Las instalaciones están equipadas con la última tecnología y proporcionan un entorno cómodo para llevar a cabo los tratamientos de fisioterapia.”</p>
                <div class="testimonials-content">
                    <img src="<?php echo $URL; ?>/assets/img/testimonials/4.png" alt="Testimonios_Clinica_Ventura_Elche">
                    <h4>José Tormé</h4>
                    <span></span>
                </div>
            </div>
            <div class="single-testimonials" style="height: 350px; border-radius:25px">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Flexibilidad y conveniencia</h3>
                <p>“El centro ofrece horarios flexibles y se adapta a las necesidades de los pacientes. Esto facilita la programación de citas, incluso para aquellos con agendas ocupadas.”</p>
                <div class="testimonials-content">
                    <img src="<?php echo $URL; ?>/assets/img/testimonials/5.png" alt="Testimonios_Clinica_Ventura_Elche">
                    <h4>Laura Méndez</h4>
                    <span></span>
                </div>
            </div>
            <div class="single-testimonials" style="height: 350px; border-radius:25px">
                <ul>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                    <li>
                        <i class="bx bxs-star"></i>
                    </li>
                </ul>
                <h3>Comunicación efectiva</h3>
                <p>“El equipo de fisioterapeutas se asegura de explicar claramente el plan de tratamiento y responder a todas las preguntas. Me sentí informado y en control de mi proceso de recuperación.”</p>
                <div class="testimonials-content">
                    <img src="<?php echo $URL; ?>/assets/img/testimonials/6.png" alt="Testimonios_Clinica_Ventura_Elche">
                    <h4>Alfonso Quintano</h4>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FIN ÁREA -->


<?php
include('layouts/footer-principal.php');
include('admin/layout/mensaje.php');
?>
</body>

</html>