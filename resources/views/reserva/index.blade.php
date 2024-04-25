
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema de Reserva de Hoteles</title>
  </head>
  <body>
  <x-app-layout>
    <div class="container">
      <h1 class="text-center">Sistema de Reserva de Hoteles</h1>
      <a href="{{ route('reservas.create') }}" class="btn btn-success">Agregar</a>
      <a href="{{ route('dashboard') }}" class="btn btn-danger">Return Menu</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Numero Habitacion</th>
              <th scope="col">Fecha Inicio</th>
              <th scope="col">Fecha Fin</th>
              <th scope="col">Cliente Nombre</th>
              <th scope="col">Clien Email</th>
              
            </tr>
          </thead>
          <tbody>
              @foreach ($reservas as $reserva)
                <tr>
                  <th scope="row">{{ $reserva->id }}</th>
                  <td>{{ $reserva->numero }}</td>
                  <td>{{ $reserva->fecha_inicio }}</td>
                  <td>{{ $reserva->fecha_fin }}</td>
                  <td>{{ $reserva->cliente_nombre }}</td>
                  <td>{{ $reserva->cliente_email }}</td>
                  <td>

                    <a href="{{route('reservas.edit',['reserva' => $reserva->id])}}"
                        class="btn btn-info">Edit</a></li>

                    <form action="{{route('reservas.destroy',['reserva' =>$reserva->id])}}"
                        method="POST" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </x-app-layout>
  </body>
</html>
