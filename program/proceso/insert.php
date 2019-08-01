<?php 
include '../crud/crud.php';
$db=new colegio("mysql:dbname=colegio;host=localhost","root","");
$db->conecxion();
$col= "user,pass"
$files=":user,:pass";
$campo_1=$_POST['user'];
$campo_2=md5($_POST['pass']);
$users=$db->inst_user($col,"users",$campo_1,$campo_2,$files);

header("Location:form.php?=msj".$users);

?>