<?php

include '../crud/crud.php';
include '../herramientas/datos.php';
$user=$_POST['user'];
$pass=$_POST['pass'];
$data= new datos ;
//$dato1=$data->($user);
//$dato2=$data->($pass);
$db=new colegio("mysql:dbname=colegio;host=localhost","root","");
$db->conecxion();
$db->ingreso($user,$pass);
?>