<?php 


 function comparar()
  {
   
   session_start();
    if($_SESSION['Bandera']==true){
     
    }else{
     header("Location:../index.php");
    }
 
  }




?>