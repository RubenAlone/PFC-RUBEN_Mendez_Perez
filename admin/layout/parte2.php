
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Main Footer -->
  <footer class="main-footer">
  <div class="footer-bottom-area">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copy-right">
								© Copyright <span id="anio"></span>. Clínica Ventura Elche. Todos los derechos reservados.
							</div>
						</div>
						<div class="col-lg-6">
							<div class="designed">
								Designed By 
									<a href="http://www.rubenmendezperez.com/about.html" target="_blank">Rubén Méndez Pérez</a>
							</div>
						</div>
					</div>
				</div>
  </footer>
</div>
<!-- ./wrapper -->
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

<!-- REQUIRED SCRIPTS -->
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $URL; ?>/templates/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>
