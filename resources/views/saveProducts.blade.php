<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>crear producto</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="mb-4">
    <h2 class="text-gray-500">Agregar un nuevo producto</h2>
    </div>  
    <div style="height: 80%; width: 70%; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
      <form action="{{ route('producto.guardar') }}" method="post" class="d-flex flex-column justify-content-center align-items-center p-4">
        @csrf
        <input type="text" placeholder="Codigo de producto" class="form-control mb-4" name="codigo">
        <input type="text" placeholder="Nombre de producto" class="form-control mb-4" name="nombre">
        <input type="text" placeholder="Precio de producto en lempiras" class="form-control mb-4" name="precio">
        <input type="text" placeholder="Existencia de producto" class="form-control mb-4" name="stock">
        <button type="submit" class="btn btn-info">ENVIAR</button>
      </form>
    </div>
  </main>
</body>
</html>