<?php 
	session_start();
	require_once 'conexion.php';

	if(isset($_POST['aceptar']))
    {
		print_r($_POST);
		echo "<br><br>";
		print_r($_SESSION);
		foreach($_POST as $index => $valor){
			$_SESSION[$index] = $valor;
		}
        $nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$user=$_POST['user'];
		$contrasena=$_POST['contrasena'];

        $sql=$cnnPDO->prepare("INSERT INTO usuarios (nombre, email, user, contrasena)
		VALUES(:nombre, :email, :user, :contrasena)");
		
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':email',$email);
		$sql->bindParam(':user',$user);
        $sql->bindParam(':contrasena',$contrasena);

        //Ejecutar variable $sql
        $sql->execute();
        unset($sql);
		header("Location:login.php");
    }
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Sitio de Mascotas</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>🐾 Regístrate 🐾</h1>
        <form method="post">
            <label for="username">Nombre</label>
            <div class="input-container">
                <input type="text" id="nombre" name="nombre" required>
                <span class="icon">🐶</span>
            </div>
            <label for="username">Usuario</label>
            <div class="input-container">
                <input type="text" id="user" name="user" required>
                <span class="icon">🐶</span>
            </div>
            
            <label for="email">Email</label>
            <div class="input-container">
                <input type="email" id="email" name="email" required>
                <span class="icon">📧</span>
            </div>
            
            <label for="password">Contraseña</label>
            <div class="input-container">
                <input type="password" id="contrasena" name="contrasena" required>
                <span class="icon">🔒</span>
            </div>
            
            <label for="confirm-password">Confirmar Contraseña</label>
            <div class="input-container">
                <input type="password" id="confirm-password" name="confirm-password" required>
                <span class="icon">🔒</span>
            </div>
            
            <button type="submit" id="aceptar" name="aceptar">Registrarse</button>
        </form>
    </div>
</body>
</html>
