<?php
require ("templates/head.php");

?>



<body class="text-center">
    <form class="form-signin" action="proceso/login.php" method="POST">
  
  <h1 class="h3 mb-3 font-weight-normal">Ingreso</h1>
  <label for="inputEmail" class="sr-only">Usuario</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus name="user">
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="pass">
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
</body>
</html>
