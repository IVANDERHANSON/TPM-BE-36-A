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

    @forelse ($products as $product)
      <div class="card" style="width: 18rem;">
        <img src="{{ asset('/storage'.'/'.$product->ProductImage) }}" class="card-img-top" alt="{{ $product->ProductImage }}">
        <div class="card-body">
          <h5 class="card-title">{{ $product->id.'. '.$product->ProductName }}</h5>
          <p class="card-text">Product Price: {{ $product->ProductPrice }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @empty
      <div>
        Data is emtpy.
      </div>
    @endforelse

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>