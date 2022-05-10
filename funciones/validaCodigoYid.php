<?php
require "conectar7.php";
$con = conecta();
//Recibe variables
$codigo = $_REQUEST['codigo'];
$id = $_REQUEST['id'];
$flag = 0;
$sql = "SELECT codigo FROM productos WHERE codigo = '$codigo'";
$result = $con ->query($sql);
$num = $result ->num_rows;
 if ($num) {
     $flag=2;

     $sql = "SELECT codigo FROM productos WHERE codigo = '$codigo' AND id= '$id'";
     $result = $con ->query($sql);
     $num = $result ->num_rows;
     if($num){
       $flag=1;
     }
 }

echo "$flag";
 ?>
