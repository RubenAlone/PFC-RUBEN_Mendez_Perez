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

<!-- ÁREA DE CONTACTO -->


<!--Agregamos el contenido de la página-->
		<!-- Start Contact Area -->
		<section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span></span>
					<h2>Déjanos un mensaje <br> para cualquier consulta o cita</h2>
					<p>Le atenderemos lo antes posible.</p>
				</div>
				<div class="row">
					<!-- <div class="col-lg-6">
						<div class="contact-wrap contact-pages">
							<div class="contact-form contact-form-mb">
								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Por favor introduzca su nombre" placeholder="Nombre">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Por favor introduzca su email" placeholder="Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Por favor introduzca su número de teléfono" class="form-control" placeholder="Teléfono">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Por favor introduzca el asunto" placeholder="Asunto">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="4" required data-error="Escriva su mensaje" placeholder="Mensaje"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn btn-two">
												Enviar Mensaje
												<i class="flaticon-right"></i>
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> -->
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="single-contact-info">
									<i class="bx bx-envelope"></i>
									<h3>Email:</h3>
									<a href="mailto:info@clinicaventuraelche.com?subjet=Pedir información">info@clinicaventuraelche.com</a>
									<a href="mailto:manoligagullo@gmail.com?subject=Pedir información">manoligagullo@gmail.com</a>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="single-contact-info">
									<i class="bx bx-location-plus"></i>
									<h3>Dirección</h3>
									Ptda. Altabix P-1, nº411 A 03291 Elche, España.
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="single-contact-info">
									<i class="bx bx-phone-call"></i>
									<h3>Llámanos</h3>
									<a href="tel:+(34)608203548">JULIO - Telf. 608203548</a>
									<a href="tel:+(34)670340308">MANOLI - Telf. 670340308</a>
									<a href="tel:+(34)607481975">CRISTIAN - Telf. 607481975</a>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
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
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.714916924968!2d-0.6941195878636667!3d38.3092723717381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63b61955555555%3A0x803f62f0bbac75de!2sCl%C3%ADnica%20Ventura%20Elche!5e0!3m2!1ses!2ses!4v1701858966109!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- End Map Area -->



		<?php
include('layouts/footer-principal.php');
include('admin/layout/mensaje.php');
?>
</body>

</html>