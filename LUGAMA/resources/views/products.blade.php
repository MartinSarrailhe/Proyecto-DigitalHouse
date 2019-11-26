<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Productos - LUGAMA</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/products.css')}}">

    </head>

    <body>
      @include('header')

      <div class="seach-box">
             <input class="search-input" type="search" placeholder="Buscar...">
             <button>Buscar</button>
      </div>

      <div class="products-container">
        <div class="categories">
          <ul>
            <li class="categories-title">Categorías</li>
            <li> <a class="categorie-link" href="#">Auriculares</a> </li>
            <li> <a class="categorie-link" href="#">Gabinetes</a> </li>
            <li> <a class="categorie-link" href="#">Memorias RAM</a> </li>
            <li> <a class="categorie-link" href="#">Motherboards</a> </li>
            <li> <a class="categorie-link" href="#">Mouses</a> </li>
            <li> <a class="categorie-link" href="#">Placas de video</a> </li>
            <li> <a class="categorie-link" href="#">Procesadores</a> </li>
            <li> <a class="categorie-link" href="#">Teclados</a> </li>
          </ul>
        </div>

        <div class="products">
          @forelse ($products as $product)
            <article class="products">
              <a class="product-img" href="#"> <img class="product-image" src="/img/{{ $product->featured_img }}" alt=""> </a>
              <a class="name-product" href="#"> <span class="product-name">{{ $product->name }}</span> </a>
              <div class="product-price">${{ $product->price }}</div>
            </article>
          @empty
            <p>No se encontraron productos.</p>
          @endforelse

            {{ $products->links() }}
            
        </div>
      </div>



      @include('footer')
    </body>
