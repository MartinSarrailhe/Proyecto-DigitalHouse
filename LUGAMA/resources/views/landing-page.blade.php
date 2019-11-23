<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOME - LUGAMA</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">

    </head>


    <body>
      @include('header')

      <div class="seach-box">
             <input class="search-input" type="search" placeholder="Buscar...">
             <button>Buscar</button>
      </div>

      <div class="content">
              <img class="banner-nvidia" src="img/widenvidia.jpg" alt="">

              <div class="popular-products text-center">
                <h3 class="popular-products">Más populares</h3>
                <section class="populars-section">
                      @forelse ($products as $product)
                        <article class="products">
                          <a class="product-img" href="#"> <img class="product-image" src="/img/{{ $product->featured_img }}" alt=""> </a>
                          <a class="name-product" href="#"> <span class="product-name">{{ $product->name }}</span> </a>
                          <div class="product-price">${{ $product->price }}</div>
                        </article>
                      @empty
                        <p>No se encontraron productos.</p>
                      @endforelse
                </section>
                <div class="div-button">
                    <button class="more-products-button" type="button" name="button">ver más productos</button>
                </div>
              </div> <!-- fin de productos -->
      </div>

      @include('footer')

    </body>
</html>
