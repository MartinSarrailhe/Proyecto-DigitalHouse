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

      @include('search-bar')

      <div class="products-container">
        <div class="categories">
          <h2 class="categories-title">Categorías</h2>
          <ul>
            @foreach ($categories as $category)
              <li> <a class="categorie-link" href="{{url('/products/category/$category->id')}}"> {{ $category->name }} </a> </li>
            @endforeach
          </ul>
        </div>

        <div class="products">
          @forelse ($products as $product)
            <article class="products">
              <a class="product-img" href="{{route('product.show', $product->id)}}"> <img class="product-image" src="/img/{{ $product->featured_img }}" alt=""> </a>
              <a class="name-product" href="{{route('product.show', $product->id)}}"> <span class="product-name">{{ $product->name }}</span> </a>
              <div class="product-price">${{ $product->price }}</div>
            </article>
          @empty
            <p>No se encontraron productos.</p>
          @endforelse

            <div class="pagination pagination-sm">
              {{ $products->links() }}
            </div>


        </div>
      </div>



      @include('footer')
    </body>
