<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>HOME</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center bg-dark" style="height: 100vh;">
    <h2 class="text-info">HOME</h2>
    <div class="d-flex">
      <div class="me-4">
        <button class="btn btn-primary"><a href="{{ route('productos') }}" style="text-decoration: none;" class="link-light">Productos</a></button>
      </div>
      <div>
        <button class="btn btn-primary"><a href="{{ route('ventas') }}" class="link-light" style="text-decoration: none;">ventas</a></button>
      </div>
    </div>
  </main> 
</body>
</html>