<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/mainadmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="http://localhost/php/bienesraices-master/js/jsfiles.js"></script>

</head>
<body class="admin-body">
    <aside class="admin-aside">
        <div class="admin-first">  
            <h1>Bienvenido 
                <?php /* echo $usuario1  */?> 
            </h1> 
            <img src="style/images/adminpro.png" alt="usuario" class="admin-pic">
            <div class="admin-btn">
                <button class="admin-btn-press">
                    <a href="cerrar.php" class="button_top -orange">Cerrar Sesión</a>
                </button>
            </div>
        </div>  
        <div class="cat-div"> 
        
            <a href="{{ route('Usuarios') }}">
                <img src="style/images/perfil.png" alt="User" class="fku">
                <p>Usuarios</p>
            </a>
            <a href="{{ route('Propiedades') }}">
                <img src="style/images/articulos.png" alt="Propiedades" class="fku">
                <p>Propiedades</p>
            </a>
            <a href="{{ route('Mensajes') }}">
                <img src="style/images/correo-electronico.png" alt="Mensajes" class="fku">
                <p>Mensajes</p>
            </a>
            <a href="{{ route('Ciudad') }}">
                <img src="style/images/articulos.png" alt="Ciudad" class="fku">
                <p>Añadir Ciudad</p>
            </a>
        </div>
    </aside>

    @yield('contenidoadmin')

</body>
</html>