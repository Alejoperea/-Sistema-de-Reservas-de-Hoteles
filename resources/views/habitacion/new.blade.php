<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Habitacion</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Agregar Habitacion</h1>
    <form method="POST" action="{{ route('habitaciones.store') }}">
        @csrf
        {{-- <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
            <div id="idHelp" class="form-text">Hotel Codigo</div>
        </div> --}}

        <label for="nombre">Nombre:</label>
            <select class="form-select" id="nombre" name="nombre" required>
                <option selected disabled value="">Selecione Hotel</option>
                @foreach ($hoteles as $hotel)
                <option value="{{$hotel ->id}}">{{$hotel->nombre}}</option>
                @endforeach
            </select>
        
        <div class="mb-3">
            <label for="numero" class="form-label">Numero</label>
            <input type="text" required class="form-control" id="numero" aria-describedby="numeroHelp" name="numero" placeholder="Numero">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo Habitacion</label>
            <input type="text" required class="form-control" id="tipo" aria-describedby="tipoHelp" name="tipo" placeholder="Tipo Habitacion">
        </div>

        <div class="mb-3">
            <label for="precio_por_noche" class="form-label">Precio Por No</label>
            <input type="text" required class="form-control" id="precio_por_noche" aria-describedby="precio_por_nocheHelp" name="precio_por_noche" placeholder="Precio Por Noche">
        </div> 

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('habitaciones.index') }}" class="btn btn-warning">Cancel</a>
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
