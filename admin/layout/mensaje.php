<?php
if( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono'])) && (isset($_SESSION['texto']))) {
    $respuesta = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
    $texto = $_SESSION['texto'];  ?>
                        <script>
                        Swal.fire({
                        icon: '<?php echo $icono; ?>',
                        title: '<?php echo $icono; ?>',
                        text: "<?php echo $respuesta?>",
                        
});
                          
                    </script>
                    <?php
                    unset($_SESSION ['mensaje']);
                    }
                    ?>