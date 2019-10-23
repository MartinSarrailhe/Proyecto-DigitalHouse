<?php

include "init.php";

if($auth->usuarioLogueado()){
  header("Location:home.php");
  exit;
}

$errores = [];

if($_POST){
  $errores = Validator::validarLogin($_POST);

  if(!$errores){
    $auth->loguearUsuario($_POST['Email']);
    header("Location:home.php");
    exit;
  }
}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto|Gayathri|Anton|Lexend+Giga|Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/styles.css">
  <title>Login - LUGAMA</title>
</head>
  <body>
    <header>
      <nav class="main-nav">
        <div class="logocontainer">
          <a href="home.php">
            <img class="logo" src="images/logoLugama.png" alt="">
          </a>
        </div>
        <div class="navs">
          <ul class="navdecategorias">
            <li class="menu"><a href="#"><i class="fas fa-bars"></i></a></li>
            <li class="categorias"><a href="#"><i class="fas fa-bars"></i> CATEGORIAS</a></li>
            <li class="categorias"><a href="#">COMPONENTES</a></li>
            <li class="categorias"><a href="#">PERIFÉRICOS</a></li>
            <li class="categorias contacto"><a href="#" class="contactos">CONTACTO</a></li>
            <li class="categorias"><a href="#"><span class="armatupc">ARMÁ TU PC</span></a></li>
          </ul>
          <ul class="navderegister">
            <li class="login"><a href="login.php">Ingresar</a></li>
            <li class="login"><a href="registro.php">Registrarse</a></li>
            <li class="carrito"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="seachbox">
					    <input class="flexsearch--input" type="search" placeholder="Buscar producto...">
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <h1 class="titulologin">
      Acceder a su cuenta
    </h1>
    <div class="access">
      <form class="login" action="" method="post">
        <div class="Persona">
          <label for="Email">Email</label>
          <input id="Email" type="email" name="Email" value="">
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["Email"])): ?>
                <?= $errores["Email"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="encriptado">
          <label for="Contraseña">Contraseña</label>
          <input id="Contraseña" type="password" name="Contraseña" value="">
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["login"])): ?>
                <?= $errores["login"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="checkboxrememberme">
          <label for="rememberme">Recordarme</label>
          <input class="notfullwidth" id="rememberme" type="checkbox" name="rememberme" value="">
        </div>
        <button class="iniciosesion" type="submit" name="button">Iniciar Sesión</button>
        <br>
        <a class="norecuerdacontraseña" href="#">¿No recuerda su contraseña?</a>
      </form>
    </div>
    <footer>
      <div class="informacion">
        <ul>
          <li class="top">Contactanos!</li>
          <li><i class="fas fa-compass"></i> Calle Siempre Viva 123, Springfield, Estados Unidos.</li>
          <li><i class="fas fa-phone-alt"></i> 011-4756-8765</li>
          <li><i class="fab fa-whatsapp-square"></i> 54-011-1557847382</li>
          <li><i class="far fa-envelope"></i> lugama@dh.com</li>
        </ul>
      </div>
      <div class="faqs">
        <ul>
          <li class="top">Informacion General</li>
          <li><span class="horario">Horarios</span> <i class="far fa-clock"></i> : Lunes a Viernes de 10 a 22hs/Sabados de 10 a 15hs.</li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">FAQ'S</a></li>
          <li><a href="#">Sugerencias</a></li>
        </ul>
      </div>
      <div class="redes">
        <ul>
          <li class="top">Seguinos en nuestras redes!</li>
          <div class="redesociales">
            <li><a href="#"> <img src="images/facebook.png" alt=""> </a></li>
            <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
            <li><a href="#"><img src="images/instagram.png" alt=""></a></li>
            <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
          </div>
        </ul>
      </div>
    </footer>
  </body>
</html>
