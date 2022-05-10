<?php
require "conectar7.php";
$con = conecta();
//Recibe variables
$correo = $_REQUEST['correo'];
//declaracion de consulta y bandera
$flag = 0;
$sql = "SELECT correo FROM usuario WHERE correo = '$correo'";
//ejecucion de query
$res = $con ->query($sql);
//numero de filas
$num = $res ->num_rows;
//comprobaciones del numero de filas
 if ($num) {
   $flag = 1;
 }
echo "$flag";
 ?>
