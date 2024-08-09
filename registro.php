<?php
include ('app/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(90deg, #73797a 0%, #73797a 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            width: 900px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .left-panel {
            background: linear-gradient(135deg, #ffb639 0%, #ff7512 100%);
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            width: 40%;
        }
        .left-panel img {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
            border: 4px solid #fff;
        }
        .left-panel button {
            margin-top: 20px;
            border: 1px solid white;
            background: none;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .left-panel button:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .right-panel {
            padding: 40px;
            width: 60%;
        }
        .right-panel h1 {
            margin-bottom: 20px;
            color: #ff7512;
        }
        .right-panel .form-group {
            margin-bottom: 15px;
        }
        .right-panel button {
            width: 100%;
            padding: 10px;
            background: #FF7512;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
        .right-panel button:hover {
            background: #FF7512;
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
    <script>
        function validateForm(event) {
            event.preventDefault();

            const nombre = document.forms["registroForm"]["nombre"].value;
            const apellidoPaterno = document.forms["registroForm"]["apellido_paterno"].value;
            const apellidoMaterno = document.forms["registroForm"]["apellido_materno"].value;
            const correo = document.forms["registroForm"]["correo"].value;
            const contrasena = document.forms["registroForm"]["contrasena"].value;
            const contrasenaVerify = document.forms["registroForm"]["contrasena_verify"].value;

            if (!nombre || !apellidoPaterno || !apellidoMaterno || !correo || !contrasena || !contrasenaVerify) {
                alert("Todos los campos son obligatorios.");
                return false;
            }

            if (!/\S+@\S+\.\S+/.test(correo)) {
                alert("Por favor, ingresa un correo electrónico válido.");
                return false;
            }

            if (contrasena !== contrasenaVerify) {
                alert("Las contraseñas no coinciden.");
                return false;
            }

            document.forms["registroForm"].submit();
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <img src="public/images/logo/Logobb.png" alt="imagen perfil" width="500" height="500"> 
        </div>
        <div class="right-panel">
            <h1>Registro</h1>
            <form name="registroForm" action="app/controllers/login/controller_registro.php" method="post" onsubmit="validateForm(event)">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" name="apellido_paterno" class="form-control" placeholder="Apellido Paterno" required>
                </div>
                <div class="form-group">
                    <input type="text" name="apellido_materno" class="form-control" placeholder="Apellido Materno" required>
                </div>
                <div class="form-group">
                    <input type="email" name="correo" class="form-control" placeholder="Correo electronico" required>
                </div>
                <div class="form-group">
                    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <input type="password" name="contrasena_verify" class="form-control" placeholder="Verificar contraseña" required>
                </div>
                <button type="submit">Registrar</button>
                <br>
                <br>
                <a href="<?php echo $URL;?>/index.php" class="custom-btn">Regresar</a>
</button>
                
               
            </form>
        </div>
    </div>
</body>
</html>


<php?
include ('layout/parte2.php');
include ('admin/layout/mensaje.php');
