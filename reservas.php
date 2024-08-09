<?php
include ('app/config.php');
include ('layout/parte1.php');
?>

  <!-- Favicons -->
  <link href="Public/img/favicon.png" rel="icon">
  <link href="Public/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Para títulos -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&display=swap" rel="stylesheet">

    <!-- Para textos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <!-- Para anuncios -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300..700&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var a;
var email_sesion = '<?php echo $email_sesion; ?>';

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'es',
    editable: false,
    selectable: true,
    allDaySlot: false,
    events: 'app/Controllers/Reservas/cargar_reserva.php',
    dateClick: function(info) {
      a = info.dateStr;
      
      const fechaComoCadena =a;
      var numeroDia = new Date(fechaComoCadena).getDay();
      var dias = ['DOMINGO', 'LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO'];
      if (email_sesion == "") {
        $('#modal_sesion').modal("show");
      } else {
        if (numeroDia ==0 ) { // Domingo y Sábado
          alert("No hay atención el dia Lunes");
        } else {
          var hoy = new Date();
                    var an = hoy.getFullYear();
                    var mes = (hoy.getMonth() + 1).toString().padStart(2, '0'); // Asegurar dos dígitos para el mes
                    var dia = hoy.getDate().toString().padStart(2, '0'); // Asegurar dos dígitos para el día
                    var hoyStr = `${an}-${mes}-${dia}`;

                    //alert("Fecha actual: " + hoyStr + ", Fecha seleccionada: " + a);

                    if (hoyStr <= a) {
                      $('#modal_citas').modal("show");
          $('#dia_de_la_semana').html(dias[numeroDia] + " " + a);

          var fecha = info.dateStr;
          var res = "";
          var url = "app/Controllers/Reservas/verificar_horario.php";
          $.get(url, { fecha: fecha }, function(datos) {
            res = datos;
            $('#respuesta_horario').html(res);
          });
                    } else {
                        alert("No puede reservar fecha anterior  a la fecha actual ");
                    }




          

          // Añadir el evento de clic para los botones dentro de la función dateClick
          $('#btn_h1').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h1 = "3:00 pm ";
            $('#hora_cita').val(h1);
            $('#hora_cita2').val(h1);
          });
          $('#btn_h2').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h2 = "4:00 pm ";
            $('#hora_cita').val(h2);
            $('#hora_cita2').val(h2);
          });
          $('#btn_h3').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h3 = "5:00 pm "; 
            $('#hora_cita').val(h3);
            $('#hora_cita2').val(h3);
          });
          $('#btn_h4').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h4 = "6:00"; 
            $('#hora_cita').val(h4);
            $('#hora_cita2').val(h4);
          });
          $('#btn_h5').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h5 = "7:00 pm";
            $('#hora_cita').val(h5);
            $('#hora_cita2').val(h5);
          });
          $('#btn_h6').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h6 = "8:00pm";
            $('#hora_cita').val(h6);
            $('#hora_cita2').val(h6);
          });
          $('#btn_h7').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h7 = "9:00 pm ";
            $('#hora_cita').val(h7);
            $('#hora_cita2').val(h7);
          });
          $('#btn_h8').off('click').on('click', function() {
            $('#modal_formulario').modal("show");
            $('#fecha_cita').val(a);
            $('#fecha_cita2').val(a);
            var h8 = "04:00 pm - 05:00 pm";
            $('#hora_cita').val(h8);
            $('#hora_cita2').val(h8);
          });
        }
      }
    }
  });
  calendar.render();
});
</script>

<!-- Agrega esta sección para establecer el color de fondo del cuerpo -->
<style>
  body {
    background-color: #1A1814;
  }
  .custom-btn:hover {
    background-color: #FF7512;
  }
        .custom-btn {
    width: 100%;
    border-radius: 20px;
    padding: 10px;
    border: none;
    cursor: pointer;
    background-color: grey;
    color: white;
    text-align: center;
    display: inline-block;
    text-decoration: none;
  }
</style>

<section class="our-services">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <br><br>
        <h1 style="text-align: center"><b style="color: #F2AE30; font-family:'Belgrano', serif;">Agenda tu Reserva</b></h1>
        <br><br>
      </div>
      <div class="row">
        <div id='calendar'></div>
      </div>
    </div>
  </div>
</section>




<?php include('layout/parte2.php');
include ('admin/layout/mensaje.php');
 ?>

<!-- Modal sesion -->
<div class="modal fade" id="modal_sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><a style="color: #F2AE30; font-family:'Belgrano', serif;">¿Te gustaria crear una Reserva?</a> <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><h4><a style="color: #5D6E84; font-family:'Belgrano', serif;">Para agendar, debe iniciar sesión</a></h4></p>
        <center>
          <div class="d-grid gap-2">
             <a href="<?php echo $URL;?>/login" class="btn btn-primary" type="button" style="background-color: #FD7E14; border: none; outline: none;">Iniciar sesión</a>
              <a href="<?php echo  $URL;?>/registro.php" class="btn btn-primary" type="button" style="background-color: #5D6E84; border: none; outline: none;">Registrarse</a>
        </div>
        </center>
      </div>
      </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_citas" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" t
<div class="modal fade" id="modal_citas"  data-backdrop="static"dta-keyboard="false"  aria-labelledby="staticBackdropLabel"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> <a style="color:#F2AE30; font-family:'Belgrano',serif;">Horario de la Reserva</a> <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="respuesta_horario"></div>
          <div class="col-md-6">
            
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-info" id="btn_h1" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">3:00 pm</button>
              <button class="btn btn-info" id="btn_h2" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">4:00 pm </button>
              <button class="btn btn-info" id="btn_h3" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">5:00 pm</button>
              <button class="btn btn-info" id="btn_h4" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">6:00 pm</button>
            </div>
          </div>
          <div class="col-md-6">
           
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-info" id="btn_h5" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">7:00 pm </button>
              <button class="btn btn-info" id="btn_h6" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">8:00 pm </button>
              <button class="btn btn-info" id="btn_h7" data-bs-dismiss="modal" type="button" style="background-color:#FD7E14; font-family:'Comfortaa', Serif; border: none; outline: none;">9:00 pm </button>
             
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <a href ="" class="btn btn-primary" style="background-color:#5D6E84; font-family:'Comfortaa', Serif; border: none; outline: none;">
            Escoger otra fecha 
           </a>

      </div>
    </div>
  </div>
</div>

<?php
//session_start();

// Suponiendo que ya tienes los valores del nombre, apellido paterno y apellido materno
$nombre = "Juan";
$apellido_paterno = "González";
$apellido_materno = "Pérez";

// Guardar estos valores en variables de sesión
$_SESSION['nombre_usuario'] = $nombre;
$_SESSION['apellido_paterno'] = $apellido_paterno;
$_SESSION['apellido_materno'] = $apellido_materno;
?>

<!-- Modal -->
<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><a style="color:#F2AE30; font-family:'Belgrano',Serif;">Personaliza tu Reservar</a> <span id="dia_de_la_semana"></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $URL;?>/app/Controllers/reservas/controller_reservas.php"method="POST">
          <div class="row mb-3">
            <div class="col-md-4">
            <a style="font-family:'Comfortaa', serif; font-size: 15px; color: #000000;">Nombre</a></label>
              <input type="text" id="nombre" class="form-control" value="<?php echo $nombre_usuario_sesion; ?>" disabled>
            </div>
            <div class="col-md-4">
            <a style="font-family:'Comfortaa', serif; font-size: 15px; color: #000000;">Apellido Paterno</a></label>
              <input type="text" id="apellido_paterno" class="form-control" value="<?php echo $apellido_paterno_sesion; ?>" disabled>
            </div>
            <div class="col-md-4">
            <a style="font-family:'Comfortaa', serif; font-size: 15px; color: #000000;">Apellido Materno</a></label>
              <input type="text" id="apellido_materno" class="form-control" value="<?php echo $apellido_materno_sesion; ?>" disabled>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
            <a style="font-family:'Comfortaa', serif; font-size: 15px; color: #000000;">Nombre</a></label>Correo Electronico</a></label>
              <input type="email" id="correo-electronico" class="form-control" value="<?php echo $email_sesion; ?>" disabled>
              <input type="hidden" id="id_usuario"  name="id_usuario" value="<?php echo $id_usuario_sesion; ?>">
            </div>
            <div class="col-md-6">
            <label for="servicio" class="form-label">
    <a style="font-family:'Comfortaa', serif; font-size: 15px; color: #000000;"># Acompañantes</a></label>

              <select name="Servicio" id="Servicio" class="form-select">
                <option value="Persona1"><a style="font-family:'Comfortaa',serif; font-size: 15px;">1 persona</a></option>
                <option value="Persona2"><a style="font-family:'Comfortaa',serif; font-size: 15px;">2 Personas</a></option>
                <option value="Persona3"><a style="font-family:'Comfortaa',serif; font-size: 15px;">3 Personas</a></option>
                <option value="Persona4"><a style="font-family:'Comfortaa',serif; font-size: 15px;">4 Personas</a></option>
              </select>
            </div>
          </div>

          <div class="mb-3">
          <a style="font-family:'Comfortaa', serif; font-size: 15px; color: #000000;"></a></label>
            <input type="text" id="nombre_mascota" name="nombre_mascota" class="form-control">
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="fecha_cita" class="form-label"><a style="font-family:'Comfortaa',serif; font-size: 15px;">Fecha:</a></label>
              <input type="text" id="fecha_cita" class="form-control" disabled>
                  <input type="text" name="fecha_cita" id="fecha_cita2" class="form-control" hidden>
            </div>
            <div class="col-md-6">
              <label for="hora_cita" class="form-label"><a style="font-family:'Comfortaa',serif; font-size: 15px;">Hora:</a></label>
              <input type="text" id="hora_cita" class="form-control" disabled>
              <input type="text" id="hora_cita2"  name="hora_cita" class="form-control" hidden>
            </div>
          </div>
          <div class="modal-footer">
          <a href ="" class="btn btn-pr" style="font-family:'Comfortaa',serif; color:#FFFFFF; font-size: 15px; background-color: #5D6E84; border: none; outline: none;">
            Cancelar
           </a>
            <button type="submit" class="btn btn-primary" style="font-family:'Comfortaa',serif; font-size: 15px; background-color: #FD7E14; border: none; outline: none;">Registrar Reserva</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
