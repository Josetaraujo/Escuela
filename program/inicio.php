<?php
include 'herramientas/comparar.php';
 comparar();
include  'templates/head.php';
include 'templates/header.php';
?>
 <main class="bd-masthead" id="content" role="main">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
        <h1 class="mb-3 bd-text-purple-bright">Bienvenido</h1>
        <p class="lead">
          Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.
        </p>
        <p class="lead mb-4">
          Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.
        </p>
        <div class="row mx-n2">
          <div class="col-md px-2">
            <a href="/docs/4.3/getting-started/introduction/" class="btn btn-lg btn-bd-primary w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', 'Get started', 'Get started');">Get started</a>
          </div>
          <div class="col-md px-2">
            <a href="/docs/4.3/getting-started/download/" class="btn btn-lg btn-outline-secondary w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 4.3.1');">Download</a>
          </div>
        </div>
 <?php 
  include 'templates/footer.php';
  ?>