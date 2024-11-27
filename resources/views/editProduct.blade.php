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

    <form action="{{ route('editProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf

      <label for="ProductName">Product Name</label><br>
      <input id="ProductName" type="text" name="ProductName" value="{{ $product->ProductName }}"><br>
      @error('ProductName')
          <p style="color: red;">{{ $message }}</p>
      @enderror

      <label for="ProductPrice">Product Price</label><br>
      <input id="ProductPrice" type="number" name="ProductPrice" value="{{ $product->ProductPrice }}"><br>
      @error('ProductPrice')
          <p style="color: red;">{{ $message }}</p>
      @enderror

      <label for="ProductImage">Product Image</label><br>
      <input id="ProductImage" type="file" name="ProductImage" value="{{ $product->ProductImage }}"><br>
      @error('ProductImage')
          <p style="color: red;">{{ $message }}</p>
      @enderror

      <br>
      <label for="">Category</label>
      <select name="CategoryId">
        <option value="{{ $product->CategoryId }}">{{ $product->category->CategoryName }}</option>
        @foreach ($categories as $category)
            @if ($category->id != $product->CategoryId)
                <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
            @endif
        @endforeach
      </select><br><br>

      <button type="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>