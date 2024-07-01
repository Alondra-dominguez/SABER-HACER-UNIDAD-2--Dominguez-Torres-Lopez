<?php
session_start();

if (isset($_POST['aceptar'])) {  

require 'conexion.php';
    $user = $_POST['user'];
    $contrasena = $_POST['contrasena'];

    $query=$cnnPDO->prepare('SELECT * from usuarios WHERE user=:user and contrasena=:contrasena');

    $query->bindParam(':user',$user);
    $query->bindParam(':contrasena',$contrasena);

    $query->execute();

    $count=$query->rowCount();
    $campo = $query->fetch();

    if ($count) {
       $_SESSION['user'] = $user;
       $_SESSION['contrasena'] = $contrasena;
       header("Location:index.php");
    }
    }
ob_end_flush();
  #termina el codigo de ingresar contraseña
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio de Mascotas</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>🐾 Bienvenido a Croq Shop 🐾</h1>
        <form method="post">
            <label for="username">Usuario</label>
            <div class="input-container">
                <input type="text" id="user" name="user" required>
                <span class="icon">🐶</span>
            </div>
            
            <label for="password">Contraseña</label>
            <div class="input-container">
                <input type="password" id="contrasena" name="contrasena" required>
                <span class="icon">🔒</span>
            </div>
            
            <button type="submit" id="aceptar" name="aceptar">Iniciar Sesión</button>
            <button onclick="location.href='registro.php'" class="register-btn">Registrarse</button>
        </form>
    </div>
</body>
</html>

