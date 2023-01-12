<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiendita virtual</title>
  <link href="<?php echo base_url() ?>/assets/bootstrap_5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/font_awesome_4.7.0/css/font-awesome.min.css">
  <style>
    span.red {
      position: absolute;
      font-size: 10px;
      background: red;
      border-radius: 1.8em;
      -moz-border-radius: 1.8em;
      -webkit-border-radius: 1.8em;
      color: #ffffff;
      display: inline-block;
      font-weight: bold;
      /* line-height: 1.6em; */
      line-height: 1.6em;
      margin-right: 0px;
      text-align: center;
      width: 1.6em;
      /* 1.6em; */
    }

    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    size: 12px;
} */

.card {
    margin: 20px;
    border-radius: 6px;
    background: #fff;
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    transition: all 400ms ease-out;
    cursor: default;
    border: solid;
    border-color: darkcyan;
    height: 420px;
    width: 100%;
}

.cards {
    padding: 10px;
}

.card-title {
    width: 100%;
    max-width: 400px;
    margin: 0%;
    padding: 20px;
    margin-top: 20px;
    text-align: left;/*center;*/
    color: blueviolet;/* #000000;*/
    /* line-height: 1.0;  */
}

.card-img-top {
    width: 100%;
    height: 200px;
}

.card:hover {
    box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
    transform: translateY(-3%);
}

.card.contenido p {
    line-height: 1.0;
    color: #6a6a6a;
    width: 100%;
    height: 210px;
}

.card-body a {
    text-decoration: none;
    display: inline-block;
    padding: 10px;
    margin-top: 10px;
    color: #000520;
    border: 2px solid #f0ad1c;
    border-radius: 4px;
    transition: all 400ms ease;
    text-align: center;
}

.card-body a {
    background: #f0ad1c;
    color: #ffd;
    text-align: center;
}

.ocultar {
    display: none;
}




  </style>

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
  <div style="margin-top: 80px;margin-left:10px;margin-right:10px;margin-bottom:10px">
