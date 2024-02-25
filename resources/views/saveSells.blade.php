<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Guardar venta</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div>
      <h2 class="text-info">Agregar ventas</h2>
    </div>
    <div style="width: 80%; box-shadow: rgba(0,0,0,.35) 0px 5px 15px" class="p-3">
      <form action="{{ route('ventas.guardar') }}" method="post">
        @csrf
        <div>
          <input name="codigo" type="text" placeholder="codigo" class="form-control p-2 mb-4">
          <input name="date" type="date" placeholder="fecha de venta" class="form-control p-2 mb-4">
          <input name="codigoProducto" type="text" placeholder="codigo de producto" class="form-control p-2 mb-4">
          <input name="cantidad" type="text" placeholder="cantidad" class="form-control p-2 mb-4">
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" class="btn btn-info me-2">GUARDAR VENTA</button>
          <button class="btn btn-warning"><a href="{{ route('home') }}" class="link-dark" style="text-decoration: none;">HOME</a></button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>