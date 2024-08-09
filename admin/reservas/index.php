<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/Controllers/Reservas/listado.php');
?>

   <br>
   <div class="container-fluid">
   <h1> Listado de Reservas </h1>

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
        <th>Apellido_p</th>
        <th>Apellido_m</th>
        <th>E-mail</th>
        <th>Mensaje </th>
        <th>No. Acompañantes</th>
        <th>Fecha de Reserva</th>
        <th>Hora Reserva</th>
        
</tr>
    </thead>
    <tbody>
        <?php
        $contador = 0;
    foreach ( $reservas as $reserva) {
      $contador = $contador + 1;
      $id_reserva =$reserva['id_reserva'];
       ?>
        <tr>
            <td> <?php echo $contador;?></td>
            <td> <?php echo $reserva ['id_reserva'];?></td>
            <td> <?php echo $reserva ['nombre'];?></td>
            <td> <?php echo $reserva ['apellido_paterno'];?></td>
            <td> <?php echo $reserva ['apellido_materno'];?></td>
            <td> <?php echo $reserva ['correo'];?></td>
            <td> <?php echo $reserva ['mensaje'];?></td>
            <td> <?php echo $reserva ['Servicio'];?></td>
            <td> <?php echo $reserva ['fecha_cita'];?></td>
            <td> <?php echo $reserva ['hora_cita'];?></td>
            
          
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
                "infoEmpty": "Mostrando 0 a 0 de 0 Reservas",
                "infoFiltered": "(Filtrado de _MAX_ total Reservas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Reservas",
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
