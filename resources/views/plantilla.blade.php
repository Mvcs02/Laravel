<!DOCTYPE html>
<html lang="en">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<head>
    <meta name="encoding" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEDIT</title>
    <meta name="description" content="Venta de casas y departamentos exclusivos de lujo.">
    <link rel="shorcut icon" href="style/images/logo.svg" />
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" />
         
    <!-- CSS -->
    <link rel="stylesheet" href="style/nosotros.css">
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
    


</head>

<body>
    <!------- HEADER ------->
    <header>
        <!-- menu -->
        <div class="navbar">
            <img class="logo" src="style/images/logo.svg" alt="logo bienes raices">
            <nav class="nav_links">
                <a href="{{ route('index') }}">Inicio</a>
                <a href="{{ route('Nosotros') }}">Nosotros</a>
                <a href="{{ route('Anuncios') }}">Anuncios</a>
                <a href="{{ route('Contacto') }}">Contacto</a>   
                <a href="{{ route('login') }}">Iniciar Sesion</a>             
        </nav>
        </div>
        
        <!-- text -->
    </header>
    <!----body---->
    
    @yield('contenido')

    <!------- FOOTER ------->
    
    <footer>
        <div>
            <a href="" >Instagram</a>
            <a href="">Facebook</a>
            <a href="">(993)-300-800</a>
            <a href="">Contacto</a>
        </div>
        <div>
            <p>Todos los derechos reservados ©</p>
        </div>
    </footer>
</body>

</html>