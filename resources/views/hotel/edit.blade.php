<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Hotel</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Editar Hotel</h1>
    <form method="POST" action="{{ route('hoteles.update',['hotel' => $hotel->id]) }}">
        @method('put')
        @csrf
        <div class="mb-3">
            {{-- <label for="id" class="form-label">Id</label> --}}
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $hotel->id }}" disabled>
            {{-- <div id="idHelp" class="form-text">Código</div> --}} 
        </div>
    
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" required class="form-control" id="nombre" name="nombre" value="{{ $hotel->nombre }}" placeholder="Nombre">
        </div>
        
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" required class="form-control" id="ubicacion" name="ubicacion" value="{{ $hotel->ubicacion }}" placeholder="Ubicación">
        </div>
    
        <div class="mb-3">
            <label for="numero_telefonico" class="form-label">Número de Teléfono</label>
            <input type="text" required class="form-control" id="numero_telefonico" name="numero_telefonico" value="{{ $hotel->numero_telefonico }}" placeholder="Número de Teléfono">
        </div>
    
        <div class="mb-3">
            <label for="email_contacto" class="form-label">Email de Contacto</label>
            <input type="text" required class="form-control" id="email_contacto" name="email_contacto" value="{{ $hotel->email_contacto }}" placeholder="Email de Contacto">
        </div> 
    
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('hoteles.index') }}" class="btn btn-warning">Cancelar</a>
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
