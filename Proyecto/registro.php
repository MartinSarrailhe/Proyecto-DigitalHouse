<?php

include "init.php";

$nombreOk = "";
$apellidoOk = "";
$emailOk = "";
$userNameOk = "";

if($auth->usuarioLogueado()){
  header("Location:home.php");
  exit;
}

if ($_POST) {
  $errores = Validator::validarRegistro($_POST);

  $nombreOk = trim($_POST['nombre'];)
  $apellidoOk = trim($_POST['Apellido'];)
  $emailOk = trim($_POST['Email']);
  $userNameOk = trim($_POST['username']);

  if (!$errores) {
    $usuario = new Usuario($_POST)
    $db->guardarUsuario($usuario, $file);
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/" . $usuario["id"] . "." . $ext);
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
  <title>Registro - LUGAMA</title>
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
    <h1 class="tituloregister">
      Registrarse
    </h1>
    <div class="padre">
      <form class="Registro" action="" method="post" enctype="multipart/form-data">
        <div class="name">
          <label for="Nombre">
            Nombre
          </label>
          <?php if(!isset($errores['Nombre'])): ?>
            <input id="Nombre" type="text" name="nombre" value="<?= $nombreOk ?>">
          <?php else: ?>
            <input id="Nombre" type="text" name="nombre" value="">
          <?php endif ?>
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["nombre"])): ?>
                <?= $errores["nombre"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="apell">
          <label for="Apellido">
            Apellido
          </label>
          <?php if(!isset($errores['Apellido'])): ?>
            <input id="Apellido" type="text" name="Apellido" value="<?= $apellidoOk ?>">
          <?php else: ?>
            <input id="Apellido" type="text" name="Apellido" value="">
          <?php endif ?>
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["Apellido"])): ?>
                <?= $errores["Apellido"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="mail">
          <label for="Email">
            Email
          </label>
          <?php if(!isset($errores['Email'])): ?>
            <input id="Email" type="text" name="Email" value="<?= $emailOk ?>">
          <?php else: ?>
            <input id="Email" type="email" name="Email" value="">
          <?php endif ?>
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["Email"])): ?>
                <?= $errores["Email"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="username">
          <label for="">
            Nombre de usuario
          </label>
          <?php if(!isset($errores['username'])): ?>
            <input id="username" type="text" name="username" value="<?= $userNameOk ?>">
          <?php else: ?>
            <input id="username" type="text" name="username" value="">
          <?php endif ?>
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["username"])): ?>
                <?= $errores["username"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="contra">
          <label for="Contraseña">
            Contraseña
          </label>
          <input id="Contraseña" type="password" name="Contraseña" value="">
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["Contraseña"])): ?>
                <?= $errores["Contraseña"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="repite">
          <label for="Contraseña2">
            Confirmar contraseña
          </label>
          <input id="Contraseña2" type="password" name="Contraseña2" value="">
          <small id="emailHelp" class="completarDatos">
            <?php if(isset($errores["Contraseña2"])): ?>
                <?= $errores["Contraseña2"]  ?>
              <?php endif?>
          </small>
        </div>
        <div class="imagenDePerfil">
          <label for="avatar">Imagen de perfil</label>
          <input type="file" id="avatar" class="perfilImage" name="avatar">
          <small id="emailHelp" class="completarDatos">
          <?php if(isset($errores['avatar'])) :?>
              <?= $errores['avatar'] ?>
            <?php endif ?>
        </div>
        <button id="enviar" type="submit" name="">Registrarse</button>
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
