<?php
session_start();

if(isset($_SESSION['idU']) == false){
  header("Location: index.php");
  exit;
}
 ?>
