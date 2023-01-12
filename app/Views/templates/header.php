<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiendita virtual</title>
  <link href="<?php echo base_url() ?>/assets/bootstrap_5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/font_awesome_4.7.0/css/font-awesome.min.css">
  <link href="<?php echo base_url() ?>/assets/cronos73/css/card.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/cronos73/css/carrito.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fa fa-university" aria-hidden="true"></i>
        Tiendita Virtual
      </a>

      <div>
        <form class="pull-left" style="margin-right:20px;margin-top:10px;">
          <a href="#" title="Carrito" rel="nofollow">
            <i class="fa fa-shopping-cart fa-lg " aria-hidden="true" style="color:white"></i>
          </a>
          <span id="carrito_cantidad" class="red"></span>
        </form>

        <button class="navbar-toggler pull-right" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>


      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opciones</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>/inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Entrar</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Mis pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div style="margin-top: 80px;margin-left:40px;margin-right: 40px;margin-bottom:60px">