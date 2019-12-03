<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ARMA TU PC - LUGAMA</title>

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

      @include('search-bar')
      <img class="armatupcimg" src="/img/armatupc.png" alt="">
      <h1 class="mother">{{$categoria->name}}</h1>
      <div class="products-container">


        <div class="products">
          @forelse ($products as $product)
            @if($product->category_id < 9)
            <article class="products">
              <form class="" action="/addproduct" method="post">
                @csrf
                <input type="image" src="/img/{{ $product->featured_img }}" name="saveForm" class="btTxt submit mothersubmit" id="saveForm" />
                <p class="name-product"> <span class="product-name">{{ $product->name }}</span> </p>
                <div class="product-price">${{ $product->price }}</div>
                <input type="hidden" name="id" value="{{$product->id}}">
              </form>
            </article>
            @else
            <article class="products">
              <form class="" action="/addtocart" method="post">
                @csrf
                <input type="image" src="/img/{{ $product->featured_img }}" name="saveForm" class="btTxt submit mothersubmit" id="saveForm" />
                <p class="name-product"> <span class="product-name">{{ $product->name }}</span> </p>
                <div class="product-price">${{ $product->price }}</div>
                <input type="hidden" name="id" value="{{$product->id}}">
              </form>
            </article>
            @endif
          @empty
            <p>No se encontraron productos.</p>
          @endforelse

        </div>
      </div>
      <div class="omitir">

        @if($product->category_id >= 5)
        <a class="omitirtexto" href="{{route('buildpc', $product->category_id + 1)}}"><button class="btn btn-success omitirfinal" style="width:30%;" type="submit">Omitir</a>
        @elseif($product->category_id == 9)
        <a class="omitirtexto" href="{{route('/cart')}}"><button class="btn btn-success omitirfinal" style="width:30%;" type="submit">Omitir</a>
        @endif

      </div>



      @include('footer')
    </body>
