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
        <link rel="stylesheet" href="{{ asset('css/addproduct.css')}}">


    </head>


    <body>
      @include('header')


      @include('search-bar')

      <div class="addproduct-form">
        <div class="form">
            <form class="addproduct-form" method="POST" action="{{ route('addproducttodb') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="">{{ __('Nombre del producto') }}</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="">{{ __('Descripción del producto') }}</label>

                    <div class="">
                        <input id="description" type="text" class="form-control" name="description" value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="">{{ __('Precio del producto') }}</label>

                    <div class="">
                        <input id="price" type="number" class="form-control" name="price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category_id" class="">{{ __('Categoria del producto') }}:</label>

                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="9" style="width:1em;height:1em;"> Auriculares
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="4" style="width:1em;height:1em;"> Gabinetes
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="3" style="width:1em;height:1em;"> Memorias RAM
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="6" style="width:1em;height:1em;"> Monitores
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="1" style="width:1em;height:1em;"> Motherboards
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="7" style="width:1em;height:1em;"> Mouses
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="5" style="width:1em;height:1em;"> Placas de video
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="2" style="width:1em;height:1em;"> Procesadores
                    </div>
                    <div class="" style="display:flex;align-items:center;">
                        <input id="category_id" type="radio" class="form-control" name="category_id" value="8" style="width:1em;height:1em;"> Teclados
                    </div>

                </div>

                <div class="form-group">
                    <label for="featured_img" class="">{{ __('Imagen del producto') }}</label>

                    <div class="">
                        <input id="featured_img" type="file" name="featured_img" placeholder="">
                    </div>
                </div>

                <div class="form-group-button">
                    <div class="">
                        <button class="addproduct-button" type="submit" class="btn btn-primary" style="background-color:#3490dc;color:white;border:none;padding:5px;">
                            Agregar Producto
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>

      @include('footer')
    </body>
</html>
