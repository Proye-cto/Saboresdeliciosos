<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/Controllers/usuarios/listado_de_usuarios.php');
?>

   <br>
   <div class="container-fluid">
   <h1> Lista de usuario </h1>

   <div class="row">
   <div class="col-md-12">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuarios registrados</font></font></h3>
</div>

<div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
        <th>N.</th>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido_m</th>
        <th>Apellido_p</th>
        <th>Email</th>
        <th>Cargo</th>
        <th>Fecha creacion</th>
        <th>Acciones</th>
</tr>
    </thead>
    <tbody>
        <?php
        $contador = 0;
    foreach ( $usuarios as $usuario) {
      $contador = $contador + 1;
      $id_usuario=$usuario['id_usuario'];
       ?>
        <tr>
            <td> <?php echo $contador;?></td>
            <td> <?php echo $usuario ['id_usuario'];?></td>
            <td> <?php echo $usuario ['nombre'];?></td>
            <td> <?php echo $usuario ['apellido_materno'];?></td>
            <td> <?php echo $usuario ['apellido_paterno'];?></td>
            <td> <?php echo $usuario ['correo'];?></td>
            <td> <?php echo $usuario ['cargo'];?></td>
            <td> <?php echo $usuario ['fecha_creacion'];?></td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="show.php?id_usuario=<?php echo $id_usuario;?>" class="btn btn-danger"><i class="bi bi-eye"></i>Ver</a>
            <a href="update.php?id_usuario=<?php echo $id_usuario;?>"class="btn btn-warning"> <i class="bi bi-pencil-fill"></i>Actualizar</a>
            <a href="delete.php?id_usuario=<?php echo $id_usuario;?>"class="btn btn-success"> <i class="bi bi-trash3"></i>Eliminar</a>
            </div>
          </td>
        </tr>
          <?php
        }
        ?>
      </tbody>
    </table>


</div>
</div>
</div>
</div>
</div>
<?php include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>
<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Usuarios",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
