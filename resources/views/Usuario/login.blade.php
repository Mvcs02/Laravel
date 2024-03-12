@extends('plantilla')
@section('contenido')
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style/estilos2.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>
    /* Estilos para el botón de navegación */
.nav-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px; /* Espaciado entre elementos de navegación */
    cursor: pointer; /* Cambiar el cursor al pasar sobre el botón */
}
.nav-button:hover {
    background-color: #0056b3;
    transition: background-color 0.3s ease;
}

/* Estilos para la barra de navegación */
nav {
    background-color: #333; /* Color de fondo de la barra de navegación */
    padding: 10px 0; /* Espaciado interno superior e inferior */
    text-align: left; /* Alinear elementos en el centro */
}
/* Estilos para la imagen de avatar */
.avatar {
    position: relative;
    z-index: 1; /* Asegurarse de que la imagen esté en un nivel superior */
}
</style>
<div class="login-box">
    <img class="avatar" src="style/images/logo.png" alt="LOGO 1">
    <H1>INICIAR SESION</H1>
    <form name="LoginForm" action="#" method="POST" class="BOX">
        <!--username-->
        <label for="username">Usuario</label>
        <input type="text" placeholder="Introduce usuario" name="username" class="controls">

        <!---password-->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Intruduce Contraseña" name="password" class="controls">
        <p><a href="{{ route('Usuarios') }}">Login</a></p>
    </form>
</div>
@endsection