<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
		<!-- FOOTER -->
		<footer class="footer-top-area pt-140 jarallax" style="background-image: url(<?php echo $URL; ?>/assets/img/footer_1920_750.png);">
			<div class="container"  >

				<div class="footer-middle-area pt-60">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<a href="index.html">
									<img src="<?php echo $URL; ?>/assets/img/logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera.jpg" alt="logo-clinica-ventura-elche_icono-clinica-ventura-elche-cabecera">
								</a>
								<ul class="social-icon">
									<li>
										<a href="#">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-pinterest-alt"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="bx bxl-youtube"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Dirección</h3>
								<ul>
								<li class="address">
										<i class="flaticon-maps-and-flags"></i>
										<span>Dirección</span>
										<p>Ptda. Altabix P-1, nº411 A <br> 03291 Elche, Alicante.</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Contacto</h3>
								<ul>
								<li class="address">
										<i class="flaticon-call"></i>
										<span>Teléfono</span><br>
										<a href="https://wa.me/34670340308" target="_blank">
										+34 670 340 308
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Email</h3>
								<ul class="information">
									<li class="address">
									<a href="mailto:info@clinicaventuraelche.com?subjet=Pedir información">info@clinicaventuraelche.com</a><br>
										<a href="mailto:manoligagullo@gmail.com?subject=Pedir información">manoligagullo@gmail.com</a>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom-area">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copy-right">
								<p>© Copyright <span id="anio"></span>. Clínica Ventura Elche. Todos los derechos reservados.</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="designed">
								<p>Designed By <i class='bx bx-heart'></i> 
									<a href="http://www.rubenmendezperez.com/about.html" target="_blank">Rubén Méndez Pérez</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-shape">
				<img src="<?php echo $URL; ?>/assets/img/shape/white-shape-bottom.png" alt="Image">
			</div>
		</footer>
		<!-- Fin Footer Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area -->
		
		<!--Actualización del año automáticamente-->
		<script>
				function actualizarAnio() {
					var fecha = new Date();
					var anio = fecha.getFullYear();
					document.getElementById("anio").innerHTML = anio;
				}
		
				// Llama a la función al cargar la página
				window.onload = function() {
					actualizarAnio();
				};
			</script>
		<!--Fin actualización año-->

        
        <!-- Jquery Min JS -->
        <script src="<?php echo $URL; ?>/assets/js/jquery.min.js"></script> 
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo $URL; ?>/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="<?php echo $URL; ?>/assets/js/meanmenu.min.js"></script>
		<!-- Owl Carousel Min JS -->
		<script src="<?php echo $URL; ?>/assets/js/owl.carousel.min.js"></script>
		<!-- Wow Min JS -->
        <script src="<?php echo $URL; ?>/assets/js/wow.min.js"></script>
        <!-- Nice Select Min JS -->
		<script src="<?php echo $URL; ?>/assets/js/nice-select.min.js"></script>
        <!-- Magnific Popup Min JS -->
		<script src="<?php echo $URL; ?>/assets/js/magnific-popup.min.js"></script>
		<!-- Mixitup JS --> 
		<script src="<?php echo $URL; ?>/assets/js/jquery.mixitup.min.js"></script>
		<!-- Appear Min JS --> 
		<script src="<?php echo $URL; ?>/assets/js/appear.min.js"></script>
		<!-- Odometer Min JS --> 
		<script src="<?php echo $URL; ?>/assets/js/odometer.min.js"></script>
		<!-- Datepicker Min JS --> 
		<script src="<?php echo $URL; ?>/assets/js/bootstrap-datepicker.min.js"></script>
		<!-- Ofi Min JS --> 
		<script src="<?php echo $URL; ?>/assets/js/ofi.min.js"></script>
		<!-- jarallax Min JS --> 
		<script src="<?php echo $URL; ?>/assets/js/jarallax.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="<?php echo $URL; ?>/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="<?php echo $URL; ?>/assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="<?php echo $URL; ?>/assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="<?php echo $URL; ?>/assets/js/custom.js"></script>
    </body>
</html>