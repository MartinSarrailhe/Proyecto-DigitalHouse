<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resultados de busqueda - LUGAMA</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/search-results.css')}}">

    </head>


    <body>
      @include('header')

      @include('search-bar')

      <h1 class="search-results">Resultados de busqueda: {{ request()->input('query') }}</h1>
      <p class="search-count">{{$products->count()}} resultados</p>
      <div class="content">
              <div class="popular-products text-center">
                <section class="populars-section">
                      @forelse ($products as $product)
                        <article class="products">
                          <a class="product-img" href="{{route('product.show', $product->id)}}"> <img class="product-image" src="/img/{{ $product->featured_img }}" alt=""> </a>
                          <a class="name-product" href="{{route('product.show', $product->id)}}"> <span class="product-name">{{ $product->name }}</span> </a>
                          <div class="product-price">${{ $product->price }}</div>
                        </article>
                      @empty
                        <p class="product-not-found">No se encontraron productos.</p>
                      @endforelse
                </section>

              </div> <!-- fin de productos -->
      </div>

      @include('footer')

    </body>
</html>
