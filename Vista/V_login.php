<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Login </title>
	</head>
	<body>
		<div class="login">
			<form class="log" action="V_login.php" method="post">
				<label>Usuario</label><br>
				<input type="text" name="user" placeholder="Ingrese usuario"><br>
				<label>Contraseña</label><br>
				<input type="password" name="passw" placeholder="Ingrese Contraseña"><br><br>
				<input type="submit" name="btn_ingresar" value="Ingresar"><br>
				<a href="usuarios.php">Registrarse?</a><br>
			</form>
			<div id="mensaje">
				<?php
				//configurar el boton ingresar
				require '../Modelo/Conexion.php';

				if (isset($_POST['btn_ingresar'])) {
					$user = $_POST['user'];
					$passw=$_POST['passw'];
					if ($user=="" || $passw=="") {
						echo "Los campos son obligatorios";

					}else{
					$resultados=mysqli_query($conexion, "SELECT *FROM usuarios WHERE usuario = '$user' and passw='$passw'");
					$filas=mysqli_num_rows($resultados);
						if($filas!=0){
							header('Location:../Controlador/C_verusuario.php');
						}else{
							echo "Usuario no registrado";
						}

						}
					}
					$conexion.exit;
				 ?>
	     </div>
		</div>
	</body>
</html>