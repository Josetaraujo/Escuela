<?php
class colegio{
    private $dato="";
    private $user="";
    private $pass="";
    private $conect="";
    
    function __construct($inf,$user,$pass)
    {
    
      $this->datos=$inf;
      $this->user=$user;
      $this->pass=$pass;
    
    }
    
 function conecxion(){
    try{
       $this->conect=new PDO($this->datos,$this->user,$this->pass);
       return $this->conect;
    }catch(PDOException $e){
       echo "Problema Tecnico: ".$e->getMessage();
    }
    }
    
    function inst_user($col,$table,$arg_1,$arg_2,$files)
    {
      $this->conect->conecxion();
       $sql="";
       $sql="INSERT INTO  $table($col) VALUES ($files) ";
       $cons=$this->conect->prepare($sql);
       $cons->bindParam(":user",$arg_1);
      $cons->bindParam(":pass",$arg_2);
    try{
    $cons->execute();
    return "<div style='color:green><h3>Se ha insertado de manera exitosa</h3></div>'";
    }catch(PDOExeption $e){
    print_r($e);
    }
    
    }

    public function ingreso($arg1,$arg2)
    {
      # code...
      
      $sql="";
      $sql="SELECT * FROM users  WHERE user ==:user AND pass ==:pass"; 
      $cons=$this->conect->prepare($sql);
      $cons->bindParam(":user" ,$arg1);
      $cons->bindParam(":pass" ,$arg2);
      $r=$cons->execute();

      if(is_null($r)){  
      session_start();
       $_SESSION['Bandera']=false;
       print_r($e);
       header("Location:../index.php");
    }else{
      session_start();
      $_SESSION['Bandera']=true;
      header("Location:../inicio.php");
    }
   }
   public function buscar($dato){
     if(is_null($dato)){
      return "<div style='color:red><h3>Valor vacio </h3></div>'";
     }else{
      $sql="";
      $sql="SELECT * FROM estudiantes  WHERE nombre =:dato OR  apellido=:dato or cedula=:dato" ; 
      $cons=$this->conect->prepare($sql);
      $cons->bindParam(":dato" ,$dato);
      $cons->execute();
      if(is_null($cons)){
         $filas=$cons->fetchAll();
         return $filas;
     }else{
     print_r($e);
     return "<div style='color:red><h3>Estudiante inexistente</h3></div>'";
     }
   }


   }



}





?>