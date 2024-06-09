<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('../app/config.php');
include('../layouts/header-principal.php');
// Incluir el controlador que obtiene los datos de la base de datos
include('../app/controllers/servicios/listado_servicios.php');
include('../app/controllers/terapeutas/listado_terapeutas.php');
include('../app/controllers/reservas/cargar_reservas.php');
?>
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
<!-- Agrega el enlace a moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<!-- enlaces FullCalendar -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales/es.js'></script>



<!-- ÁREA CALENDAR.IO-->
<br><br>
<section class="expert-team-area ptb-100">
  <div class="container">
    <div class="section-title">
      <span>Reserve su cita</span>
      <h2>Comprobar Disponibilidad</h2>
    </div>
    <div class="row">
      <div id='calendar'></div>
    </div>
  </div>
</section>
<!-- FIN ÁREA -->

<?php
include('../layouts/footer-principal.php');
include('../admin/layout/mensaje.php');
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" hidden></button>

<!--NOS MUESTRA EL MODAL SESIÓN-->
<!-- Modal -->
<div class="modal fade" id="modal_sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center;">Reserve su cita</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
        <h3>Para reservar una cita, debe iniciar sesión o registrarse.</h3>
        </p>
        <div class="d-grid gap-2">
          <a href="<?php echo $URL; ?>/login" type="button" class="btn btn-success">Iniciar sesión</a>
          <a href="<?php echo $URL; ?>/login/registro.php" type="button" class="btn btn-primary">Registrarse</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--NOS MUESTRA EL HORARIO DE RESERVAS-->
<!-- Modal -->
<div class="modal fade" id="modal_reservas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center;">Reserve su cita el <span id="dia_semana"></span></h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="respuesta_horario"></div>
          <div class="col-md-6">
            <!--TURNOS DE RESERVA-->
            <b>Turno de mañana</b>
            <div class="d-grid gap-2">
              <button class="btn btn-success" id="btn_h1" data-bs-dismiss="modal" type="button">09:00 - 10:00</button>
              <button class="btn btn-success" id="btn_h2" data-bs-dismiss="modal" type="button">10:00 - 12:00</button>
              <button class="btn btn-success" id="btn_h3" data-bs-dismiss="modal" type="button">12:00 - 14:00</button>
            </div>
          </div>
          <div class="col-md-6">
            <b>Turno de tarde</b>
            <div class="d-grid gap-2">
              <button class="btn btn-success" id="btn_h4" data-bs-dismiss="modal" type="button">15:00 - 17:00</button>
              <button class="btn btn-success" id="btn_h5" data-bs-dismiss="modal" type="button">17:00 - 19:00</button>
              <button class="btn btn-success" id="btn_h6" data-bs-dismiss="modal" type="button">19:00 - 21:00</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
        <a href="" class="btn btn-primary">Escoger otra fecha</a>
      </div>
    </div>
  </div>
</div>

<!--NOS MUESTRA EL FORMULARIO DE RESERVAS-->
<!-- Modal -->
<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center;">RESERVE SU CITA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="<?php echo $URL; ?>/app/controllers/reservas/controller_reservas.php" method="post">
            <div class="row">

              <!-- NOMBRE CLIENTE -->
              <div class="col-md-6">
                <label for="nombre_completo">Nombre Usuario</label>
                <input type="text" name="nombre_completo" class="form-control" value="<?php echo $nombre_completo_sesion ?>" readonly>
                <input type="text" name="id_usuario" class="form-control" value="<?php echo $id_usuario_sesion ?>" hidden>
              </div>

              <!-- TERAPEUTAS -->
              <div class="col-md-6">
                <label for="terapeuta_id">Terapeuta</label>
                <input type="text" class="form-control" name="terapeuta_id2" id="terapeuta_n" value="<?php echo $_GET['nombre_completo'];?>" readonly>
                <input type="text" class="form-control" name="terapeuta_id" id="terapeuta_id" value="<?php echo $_GET['id_terapeuta'];?>" hidden>
              </div>
            </div>

            <!-- DATOS CLIENTE -->
            <div class="row">
              <div class="col-md-6">
                <label for="email">Correo electrónico</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email_sesion ?>" readonly>
              </div>
              <div class="col-md-6">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="<?php echo $telefono_sesion ?>" readonly>
              </div>
            </div>

            <!-- DATOS RESERVA -->
            <div class="row">
              <div class="col-md-6">
                <label for="f_reserva">Fecha reserva</label>
                <input type="text" class="form-control" name="f_reserva" id="f_reserva" readonly>
              </div>
              <div class="col-md-6">
                <label for="h_reserva">Hora reserva</label>
                <input type="text" class="form-control" name="h_reserva" id="h_reserva" readonly>
              </div>
            </div>

            <!-- COMBO BOX SERVICIOS -->
            <div class="row">
              <div class="col-md-12">
                <label for="tipo_servicio">Tipo de servicio</label>
                <select name="tipo_servicio" id="tipo_servicio" class="form-control">
                  <option value="">Seleccione</option>
                  <?php foreach ($servicios as $servicio) : ?>
                    <option value="<?php echo htmlspecialchars($servicio['id_servicio']); ?>">
                      <?php echo htmlspecialchars($servicio['nombre_servicio']); ?>

                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar reserva</button>
        </form>
      </div>
    </div>
  </div>
</div>



<script>
  // Variable GLOBAL para trabajar con fechas
  var a;
  var id=document.getElementById("terapeuta_id").value;
  // Variable para almacenar el email de sesión, el cual es obtenido del backend (PHP)
  var email_sesion = '<?php echo $email_sesion; ?>';

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      firstDay: 1,
      editable: true,
      selectable: true,
      allDaySlot: false,
      headerToolbar: {
        left: 'today,prev,next',
        center: 'title',
        right: 'dayGridMonth'
        // MOSTRAR DIA, SEMANA Y MES
        //right: 'dayGridMonth,timeGridWeek,timeGridDay'

      },
      events: '../app/controllers/reservas/cargar_reservas.php',

      dateClick: function(info) {
        a = info.dateStr;
        const fechaComoCadena = a;
        var numeroDia = new Date(fechaComoCadena).getDay();
        var dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        if (email_sesion == "") {
          $('#modal_sesion').modal("show");
        } else {
          if (numeroDia == 6) {
            alert("No hay cita los sábados");
          } else if (numeroDia == 0) {
            alert("No hay cita los domingos");
          } else {
            var year = new Date().getFullYear();
            var mes = new Date().getMonth() + 1;
            var dia = new Date().getDate();
            if(mes<10)mes= "0" + mes;
            if(dia<10) dia= "0" + dia;
            var hoy = year + "-" + mes + "-" + dia;

            if (hoy <= a) {
              $('#modal_reservas').modal("show");
              $('#dia_semana').html(dias[numeroDia] + " " + a);
              var fecha = info.dateStr;
              var res = "";
              var url = "../app/controllers/reservas/verificar_horario.php?id_terapeuta="+id;

              $.get(url, {fecha: fecha}, function(datos) {
                res = datos;
                $('#respuesta_horario').html(res);
              });
            } else {
              alert("No se puede seleccionar fechas pasadas");
            }


          }
        }



      },


    });
    calendar.render();
  });
</script>

<script>
  $('#btn_h1').click(function() {
    $('#modal_formulario').modal("show");
    $('#f_reserva').val(a);
    var h1 = "09:00 - 10:00";
    $('#h_reserva').val(h1);

  });
  $('#btn_h2').click(function() {
    $('#modal_formulario').modal("show");
    $('#f_reserva').val(a);
    var h2 = "10:00 - 12:00";
    $('#h_reserva').val(h2);

  });
  $('#btn_h3').click(function() {
    $('#modal_formulario').modal("show");
    $('#f_reserva').val(a);
    var h3 = "12:00 - 14:00";
    $('#h_reserva').val(h3);

  });
  $('#btn_h4').click(function() {
    $('#modal_formulario').modal("show");
    $('#f_reserva').val(a);
    var h4 = "15:00 - 17:00";
    $('#h_reserva').val(h4);

  });
  $('#btn_h5').click(function() {
    $('#modal_formulario').modal("show");
    $('#f_reserva').val(a);
    var h5 = "17:00 - 19:00";
    $('#h_reserva').val(h5);

  });
  $('#btn_h6').click(function() {
    $('#modal_formulario').modal("show");
    $('#f_reserva').val(a);
    var h6 = "19:00 - 21:00";
    $('#h_reserva').val(h6);

  });
</script>
</body>

</html>