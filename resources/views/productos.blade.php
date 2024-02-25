<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>productos</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh; width: 100vw;">
    <div class="mb-4">
      <h2 class="text-info">Productos</h2>
    </div>
    <div style="width: 80%; box-shadow: rgba(0,0,0,.35) 0px 5px 15px">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->codigoProducto }}</td>
              <td>{{ $product->nombre }}</td>
              <td>L.{{ $product->precio }}</td>
              <td>{{ $product->stock }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex mt-4">
      <button class="btn btn-info text-light"><a href="{{ route('producto.guardar.form') }}" style="text-decoration: none;" class="link-light">Agregar producto</a></button>
      <button class="btn btn-warning ms-4"><a href="{{ route('home') }}" style="text-decoration: none;" class="link-dark">HOME</a></button>
    </div>
  </main>
</body>
</html>