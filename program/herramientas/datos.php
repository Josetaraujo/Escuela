<?php
class datos{
  function limpiar ($dato){
    $dato = trim($dato);
    $dato = stripcslashes($dato);
    $dato = htmlspecialchars($dato);
    
    return $dato;



   }

}

?>