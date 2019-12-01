<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$product->name}} - LUGAMA</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/product.css')}}">

    </head>

    <body>
      @include('header')
      <div class="seach-box">
             <input class="search-input" type="search" placeholder="Buscar...">
             <button>Buscar</button>
      </div>

      <div class="products-container">
        {{-- <div class="categories">
          <ul>
            <li class="categories-title">Categorías</li>
            @foreach ($categories as $category)
              <li> <a class="categorie-link" href="{{ route('products', ['category' => $category->id]) }}"> {{ $category->name }} </a> </li>
            @endforeach
          </ul>
        </div> --}}
        <div class="conteiner">
          <div class=""> <img class="product-img" src="/img/{{ $product->featured_img }}" alt=""> </div>
          <div class="product-info">
            <h1 class="product-name">{{ $product->name }}</h1>
            <h2 class="product-price">${{ $product->price }}</h2>
            <p class="product-detail">{{ $product->description }}</p>
              <form class="" action="/addtocart" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <button class="btn btn-success" style="width:50%;" type="submit">Agregar al carrito</a>
              </form>
          </div>
        </div>
      </div>

      @include('might-also-like')

      @include('footer')
    </body>
