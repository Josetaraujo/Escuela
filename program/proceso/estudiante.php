<?php
include '../crud/crud.php';
include '../herramientas/datos.php';
$limpiar=new datos();

$dato=$limpiar->limpiar($_POST['dato']);


$consulta=new colegio("mysql:dbname=colegio;host=localhost","root","");
$consulta->conecxion();
$r=$consulta->buscar($dato);
session_start();
$_SESSION['cons']=$r;
header('Location:../Alumno.php');






?>