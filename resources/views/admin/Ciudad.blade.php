@extends('plantillaadmin')
@section('contenidoadmin')
<div class="admin-container">
    <form action="procesar_formulario.php" method="POST">
        <h1>Selecciona una opción:</h1>
       <!-- Opción Ciudad -->              
        <label >Ciudad</label>
       <input type="hidden" name="tipo_datos" value="ciudad" id="radio_ciudad">

        <!-- Opción Rol -->
        <h2>Datos:</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <input type="submit" value="Guardar">
    </form>
</div>
@endsection