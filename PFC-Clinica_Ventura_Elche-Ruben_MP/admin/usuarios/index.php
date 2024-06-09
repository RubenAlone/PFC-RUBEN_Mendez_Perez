<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
//Incluimos el controlador para las vistas
include('../../app/controllers/usuarios/listado_usuarios.php');
?>
<br>
<!--LISTADO DE USUARIOS REGISTRADOS-->
<div class="container-fluid">
    <h1>Listado de usuarios</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Usuarios Registrados</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-header">
                    <!--MOSTRAMOS LOS REGISTROS DE LA BASE DE DATOS EN UNA TABLA-->
                    <table id="example1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nº</th>
                                <th style="text-align: center;">Nombre Completo</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Acceso</th>
                                <th style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //NUMERAMOS EL LISTADO CORRELATIVAMENTE
                            $contador = 0;
                            foreach ($usuarios as $usuario) {
                                $contador = $contador + 1;
                                $id_usuario = $usuario['id_usuario'];
                            ?>
                                <tr>
                                    <td><?php echo $contador ?></td>
                                    <td><?php echo $usuario['nombre_completo'] ?></td>
                                    <td><?php echo $usuario['email'] ?></td>
                                    <td><?php echo $usuario['cargo'] ?></td>
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a href="show.php?id_usuario=<?php echo $id_usuario; ?>" class="btn btn-info"><i class="bi bi-eye-fill"></i> Ver</a>
                                            <a href="update.php?id_usuario=<?php echo $id_usuario; ?>" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</a>
                                            <a href="delete.php?id_usuario=<?php echo $id_usuario; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Borrar</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
<script>
    $(function() {
        $("#example1").DataTable({
            "pageLength": 10,
            "language": {
                "emptyTable": "No hay información.",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "No se encontraron resultados.",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "No se encontraron resultados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },"responsive": true, "lengthChange": false, "autoWidth": false, 
            buttons: [{
                extend: 'collection',
                text:'Reportes',
                orientation:'landscape',
                buttons:[{
                    text:'Copiar',
                    extend:'copy',
                }, {
                    text:'PDF',
                    extend:'pdf',
                }, {
                    text:'CSV',
                    extend:'csv',
                }, {
                    text:'Excel',
                    extend:'excel',
                }, {
                    text:'Imprimir',
                    extend:'print',
                }]
            },
            {
                extend: 'colvis',
                text:'Visor de columnas',
            }
        ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>