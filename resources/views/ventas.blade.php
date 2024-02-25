<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>ventas</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="mb-4">
      <h2 class="text-info">Ventas</h2>
    </div>
    <div style="width: 80%">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>codigo</th>
            <th>fecha de venta</th>
            <th>codigo de producto</th>
            <th>cantidad</th>
            <th>subtotal</th>
            <th>ISV</th>
            <th>total</th>           
          </tr>
        </thead>
        <tbody>
          @foreach ($ventas as $venta)
             <tr>
              <td>{{ $venta->codigo }}</td>
              <td>{{ $venta->fechaVenta }}</td>
              <td>{{ $venta->codigoProducto }}</td>
              <td>{{ $venta->cantidad }}</td>
              <td>L.{{ $venta->subtotal }}</td>
              <td>L.{{ $venta->ISV }}</td>
              <td>L.{{ $venta->total }}</td>
             </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center align-items-center">
      <div class="me-4">
        <button class="btn btn-info"><a href="{{ route('ventas.form') }}" class="link-light" style="text-decoration: none;">Agregar venta</a></button>
      </div>
      <div>
        <button class="btn btn-warning"><a href="{{ route('home') }}" class="link-dark" style="text-decoration: none;">HOME</a></button>
      </div>
    </div>
  </main>
</body>
</html>