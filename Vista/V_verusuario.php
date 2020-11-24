<!DOCTYPE html>
<!-- prueba sincronizacion -->
<html lang="es">
<head>
	<title>LISTA DE USUARIOS</title>7
	<meta charset="utf-8">
	<meta >
</head>
<body>
	<table>
		<tr>
			<td>Usuario</td>
			<td>Contraseña</td>
			<td>Nombre Completo</td>
		</tr>
		<tbody>
			<?php
				foreach ($usuarios as $user) {
					echo "<tr>";
					echo "<td>".$user['usuario'];
					echo "<td>".$user['passw'];
					echo "<td>".$user['nombreReal'];
					echo "</tr>";
				}

			 ?>
		</tbody>
	</table>
</body>
</html>
