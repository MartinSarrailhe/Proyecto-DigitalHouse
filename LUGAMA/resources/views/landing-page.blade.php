<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LUGAMA</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">


    </head>


    <body>
      @include('header')


      @include('search-bar')

      <div class="content">

              <div class="img-button">
                <img class="banner-nvidia" src="img/widenvidia-1.png" alt="">
                <button id="anterior"><</button>
                <button id="siguiente">></button>
              </div>

              <div class="popular-products text-center">
                <h3 class="popular-products">Más populares</h3>
                <section class="populars-section">
                      @forelse ($products as $product)
                        <article class="products">
                          <a class="product-img" href="{{route('product.show', $product->id)}}"> <img class="product-image" src="/img/{{ $product->featured_img }}" alt=""> </a>
                          <a class="name-product" href="{{route('product.show', $product->id)}}"> <span class="product-name">{{ $product->name }}</span> </a>
                          <div class="product-price">${{ $product->price }}</div>
                        </article>
                      @empty
                        <p>No se encontraron productos.</p>
                      @endforelse
                </section>
                <div class="div-button">
                    <button class="more-products-button" type="button" name="button"><a href="{{url('/products')}}">ver más productos</a></button>
                </div>
              </div> <!-- fin de productos -->
      </div>

      @include('footer')
      <script src="{{ asset('js/landing-page.js')}}"></script>
    </body>
</html>
