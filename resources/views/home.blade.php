<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <x-nav-bar />

    {{ Cookie::get('email') }}

    @forelse ($products as $product)
      <div class="card" style="width: 18rem;">
        <img src="{{ asset('/storage'.'/'.$product->ProductImage) }}" class="card-img-top" alt="{{ $product->ProductImage }}">
        <div class="card-body">
          <h5 class="card-title">{{ $product->id.'. '.$product->ProductName }}</h5>
          <p class="card-text">Product Price: {{ $product->ProductPrice }}</p>
          <p class="card-text">Category Name: {{ $product->category->CategoryName }}</p>
          <a href="{{ route('getEditProductPage', $product->id) }}" class="btn btn-primary">Edit</a>

          <form action="{{ route('deleteProduct', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    @empty
      <div>
        Data is emtpy.
      </div>
    @endforelse

    {{ $products->onEachSide(1)->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>