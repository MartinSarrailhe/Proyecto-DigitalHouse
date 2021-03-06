<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrito - LUGAMA</title>

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

      <div class="container">
        <h2 class="miscompras">Mis compras</h2>
          @forelse ($carts as $cart_number => $cart)
            <p class="carritonum">Carrito nº: {{$cart_number}}</p>
            <ul>
            @forelse ($cart as $item)
              <li class="productomiscompras">Producto: {{$item->name}}</li>
            @empty
              <p>No hay productos para este carrito.</p>
            @endforelse
            </ul>
          @empty
            <p>No hay compras.</p>
          @endforelse


      </div>



      @include('footer')

    </body>
</html>
