<div class="might-also-like">
  <h2 class="might-like-title">Productos que tambien pueden gustarte...</h2>
  <div class="might-like-grid">
    @foreach ($mightAlsoLike as $product)
      <div class="might-also-like-product">
        <a href="{{route('product.show', $product->id)}}" class="might-like-product">
          <img src="/img/{{ $product->featured_img }}" class="might-like-img">
          <div class="might-like-product-name">
            {{ $product->name }}
          </div>
          <div class="might-like-product-price">
            ${{ $product->price }}
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
