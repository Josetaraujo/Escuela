<body class="text-center">
 <header class="conteiner-fluid-12cols">
   <!--Barra de navegacion-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="inicio.php">Inicio</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#"> coming soon<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">coming soon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="proceso/cerra.php"  >Cerrar</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="proceso/estudiante.php" >
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" requieredb  name="dato">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
 </header>