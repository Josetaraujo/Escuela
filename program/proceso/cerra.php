<?php
include '../herramientas/comparar.php';
 comparar();
$_SESSION['Bandera']=false;
session_destroy();
header("Location:../index.php");

?>