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


      <div class="seach-box">
             <input class="search-input" type="search" placeholder="Buscar...">
             <button>Buscar</button>
      </div>

      <div class="container">
        <h2>Mi carrito</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cart as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <form class="" action="/cartclose" method="post">
          @csrf
            <button type="submit" class="btn btn-success">Comprar</button>
        </form>


      </div>



      @include('footer')

    </body>
</html>
