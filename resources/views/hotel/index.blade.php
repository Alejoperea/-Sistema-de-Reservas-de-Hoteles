
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
    <div class="container">
      <h1 class="text-center">Sistema de Reserva de Hoteles</h1>
      <a href="{{ route('hoteles.create') }}" class="btn btn-success">Agregar</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Ubicación</th>
              <th scope="col">Número de Teléfono</th>
              <th scope="col">Email de Contacto</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($hoteles as $hotel)
                <tr>
                  <th scope="row">{{ $hotel->id }}</th>
                  <td>{{ $hotel->nombre }}</td>
                  <td>{{ $hotel->ubicacion }}</td>
                  <td>{{ $hotel->numero_telefonico }}</td>
                  <td>{{ $hotel->email_contacto }}</td>
                  <td>
                    <form action="{{route('hoteles.destroy',['hotel' =>$hotel->id])}}"
                        method='POST' style="display:inline-block">
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
  </body>
</html>
