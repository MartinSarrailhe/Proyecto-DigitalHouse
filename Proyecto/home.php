<?php

include "functions.php";

if(isset($_COOKIE['email'])){
  loguearUsuario($_COOKIE['email']);
}

if(usuarioLogueado()){
  $usuario = buscarUsuarioPorMail($_SESSION['Email']);
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto|Gayathri|Anton|Lexend+Giga|Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>HOME - LUGAMA</title>
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
            <?php if(usuarioLogueado()): ?>
              <li class="login">Hola: <?= $usuario['username'] ?></li>
              <li class="login"><a href="logout.php">Cerrar sesión</a></li>
            <?php else: ?>
              <li class="login"><a href="login.php">Ingresar</a></li>
              <li class="login"><a href="registro.php">Registrarse</a></li>
            <?php endif ?>
            <li class="carrito"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="seachbox">
					    <input class="flexsearch--input" type="search" placeholder="Buscar producto...">
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <img class="bannernvidia" src="images/widenvidia.jpg" alt="">
    <div class="barras">
      <h6 class="subtitulo">Mas Populares</h6>
    </div>
    <section class="maspopulares">
      <article class="populares">
        <img src="images/1650.jpg" alt="">
        <p class="precio">$ 16.399</p>
        <p class="modelo">GIGABYTE GEFORCE GTX 1650 4GB</p>
      </article>
      <article class="populares">
        <img src="images/2080ti.jpg" alt="">
        <p class="precio">$ 120.999</p>
        <p class="modelo">ROG GEFORCE RTX 2080Ti 11GB</p>
      </article>
      <article class="populares">
        <img src="images/i7-9700k.jpg" alt="">
        <p class="precio">$ 32.549</p>
        <p class="modelo">Intel Core i7 9700k 4.9Ghz</p>
      </article>
      <article class="populares">
        <img src="images/ryzen7-3700x.jpg" alt="">
        <p class="precio">$ 16.399</p>
        <p class="modelo">AMD Ryzen 7 3700x 4.4Ghz</p>
      </article>
    </section>
    <div class="barras">
      <h6 class="subtitulo">Combos Recomendados</h6>
    </div>
    <section class="combosrecomendados">
      <article class="combos">
        <img src="images\comboi5.jpg" alt="">
        <p class="modelo">Combo i5 9400F + Mother B360 + 8GB RAM</p>
        <p class="precio">$ 25.999</p>
      </article>
      <article class="combos">
        <img src="images/comboi7.jpg" alt="">
        <p class="modelo">Combo i7 8700K + MSI H310 + 8 GB RAM</p>
        <p class="precio">$34.999</p>
      </article>
      <article class="combos">
        <img src="images/comboryzen5.jpg" alt="">
        <p class="modelo">Combo Ryzen 5 2400g + Gigabyte B450M + 8 GB RAM</p>
        <p class="precio">$ 19.899</p>
      </article>
      <article class="combos">
        <img src="images/comboryzen7.jpg" alt="">
        <p class="modelo">Combo Ryzen 7 2700 + MSi B450M + 8 GB RAM</p>
        <p class="precio">$ 27.299</p>
      </article>
    </section>
    <img class="banneramd" src="images/banneramd.jpg" alt="">
    <div class="barras">
      <h6>OFERTAS ESPECIALES!</h6>
    </div>
    <section class="ofertasespeciales">
      <article class="ofertas">
        <img src="images/1050ti.jpg" alt="">
        <p class="modelo2">1050Ti 3GB</p>
        <p class="negado">$ 12.999</p>
        <p class="precio2">$ 10.399</p>
        <p class="descuento">20% OFF</p>
      </article>
      <article class="ofertas">
        <img src="images/ram8gb.jpg" alt="">
        <p class="modelo2">VENGEANCE 8GB</p>
        <p class="negado memoriaram">$ 4.000</p>
        <p class="precio2">$ 2.800</p>
        <p class="descuento">30% OFF</p>
      </article>
      <article class="ofertas">
        <img src="images/i3.jpg" alt="">
        <p class="modelo2">Intel i3-8100</p>
        <p class="negado">$ 18.999</p>
        <p class="precio2">$ 16.149</p>
        <p class="descuento">15% OFF</p>
      </article>
      <article class="ofertas">
        <img src="images/krakenv2.jpg" alt="">
        <p class="modelo2">Razer Kraken V2</p>
        <p class="negado">$ 10.692</p>
        <p class="precio2">$ 7.386</p>
        <p class="descuento">30% OFF</p>
      </article>
      <article class="ofertas">
        <img src="images/mouse.jpg" alt="">
        <p class="modelo2">Logitech G502</p>
        <p class="negado">$ 5.250</p>
        <p class="precio2">$ 3.500</p>
        <p class="descuento">33% OFF</p>
      </article>
    </section>
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
          <li><b>Horarios</b> <i class="far fa-clock"></i> : Lunes a Viernes de 10 a 22hs/Sabados de 10 a 15hs.</li>
          <li><a href="#"><b>Contacto</b></a></li>
          <li><a href="#"><b>FAQ'S</b></a></li>
          <li><a href="#"><b>Sugerencias</b></a></li>
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
