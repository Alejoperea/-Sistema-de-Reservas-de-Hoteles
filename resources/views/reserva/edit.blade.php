<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Reserva</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Agregar Reserva</h1>
    <form method="POST" action="{{ route('reservas.update',['reserva' => $reserva->id]) }}">
        @method('put')
        @csrf
        <div class="mb-3">
            {{-- <label for="id" class="form-label">Id</label> --}}
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $reserva->id }}" disabled>
            {{-- <div id="idHelp" class="form-text">Código</div> --}} 
        </div>

        <label for="numero">Numero Habitacion:</label>
            <select class="form-select" id="numero" name="numero" required>
                <option selected disabled value="">Selecione Reserva</option>
                @foreach ($habitaciones as $habitacion)
                @if($habitacion->id == $reserva->habitacion_id)
                <option selected value="{{$habitacion ->id}}">{{$habitacion->numero}}</option>
                 @else
                 <option value="{{$habitacion ->id}}">{{$habitacion->numero}}</option>
                @endif
                @endforeach

            </select>

            
        
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
            <input type="date" required class="form-control" id="fecha_inicio" name="fecha_inicio"  value="{{$reserva->fecha_inicio}}" placeholder="Fecha Inicio">
        </div>


        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Fin</label>
            <input type="date" required class="form-control" id="fecha_fin" name="fecha_fin" value="{{$reserva->fecha_fin}}" placeholder="Fecha Fin">
        </div>

        <div class="mb-3">
            <label for="cliente_nombre" class="form-label">Cliente Nombre</label>
            <input type="text" required class="form-control" id="cliente_nombre" name="cliente_nombre"  value="{{$reserva->cliente_nombre}}" placeholder="Cliente Nombre">
        </div> 

        <div class="mb-3">
            <label for="cliente_email" class="form-label">Cliente Email</label>
            <input type="text" required class="form-control" id="cliente_email" name="cliente_email"  value="{{$reserva->cliente_email}}" placeholder="Cliente Email">
        </div> 

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('reservas.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
