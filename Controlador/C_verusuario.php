<?php
require('../Modelo/Conexion.php');

$con = new Conexion();
$usuarios = $con->getUsers();

require('../Vista/V_verusuario.php');

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <form class="" action="C_verusuario.php" method="post">
        <input type="submit" name="btn_close" value="cerrar sesion">
        <?php
        if (isset($_POST['btn_close'])) {
          header('Location:../Vista/V_login.php');
          }
         ?>
      </form>
    </div>

  </body>
</html>
