<?php

include ('../../../app/config.php');
$fecha = $_GET['fecha'];
$hora_cita = "";
$query = $pdo->prepare("SELECT * FROM reservas where fecha_cita = '$fecha'");
$query->execute();
$datos = $query->fetchAll (PDO::FETCH_ASSOC);

foreach ($datos as $dato) {
  $hora_cita = $dato['hora_cita'];
  $horario = ['08:00 am - 09:00 am','09:00 am - 10:00 am','10:00 am - 11:00 am','11:00 am - 12:00 pm','12:00 pm - 1:00 pm','01:00 pm - 02:00 pm','02:00 pm - 03:00 pm','04:00 pm - 05:00 pm '];

for($i = 0; $i<8 ;$i++){
  if($horario[$i]== $hora_cita){
    $num = $i + 1;
    $hora_res = "#btn_h".$num;
    echo "<script>$(document).ready(function(){
            $('$hora_res').attr('disabled', true).css({
            'background-color': 'orange',
            'border-color': 'orange',
            'color': 'white'
        });
    });
    </script>";
    





  }

}
}
