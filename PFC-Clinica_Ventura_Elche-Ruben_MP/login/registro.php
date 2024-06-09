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
<!-- ÁREA DE REGISTRO -->
<section class="main-contact-area pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="contact-wrap mb-0">
					<div class="contact-form">
						<div class="section-title">
							<h2>Formulario de Registro</h2>
						</div>
						<form method="post" action="../app/controllers/login/controller_registro.php">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="nombre_completo" id="nombre" class="form-control" required data-error="Por favor introduzca su nombre y apellidos" placeholder="Nombre Completo">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required data-error="Por favor introduzca su email" placeholder="Email de contacto">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="direccion" id="direccion" class="form-control" required data-error="Por favor su dirección" placeholder="Dirección">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="telefono" id="telefono" required data-error="Por favor introduzca un teléfono de contacto" class="form-control" placeholder="Teléfono">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" required data-error="Por favor introduzca una contraseña" placeholder="Contraseña">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="password" name="password_verify" id="password_verify" class="form-control" required data-error="Por favor introduzca una contraseña" placeholder="Repite Contraseña">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<!--PROTECCIÓN DE DATOS-->
								<div class="col-lg-12 col-md-12">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="LGPD" id="LGPD" value="option1" required/>
										<label class="form-check-label" for="LGPD">Acepto la política de privacidad y el tratamiento de datos. RGPD.</label>
									</div>
								</div>
								<!--BOTÓN ENVIO REGISTRO-->
								<div class="col-lg-12 col-md-12">
									<button type="submit" name="registro" class="default-btn btn-two">
										Enviar Registro
										<i class="flaticon-right"></i>
									</button>

								</div>
							</div>
						</form>

					</div>
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
include('../admin/layout/mensaje.php');
?>
</body>

</html>