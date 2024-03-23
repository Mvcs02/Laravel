<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="http://localhost/php/bienesraices-master/js/jsfiles.js"></script>
    <head>
        <meta name="encoding" charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienes raíces</title>
        <meta name="autor" content="Paula Farias">
        <meta name="description" content="Venta de casas y departamentos exclusivos de lujo.">
        <link rel="shorcut icon" href="style/images/logo.svg" />
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
            integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
            crossorigin="anonymous" />
        <!-- CSS -->
        <link rel="stylesheet" href="style/detalle.css">
    </head> 
<body>
    <header>
        <!-- menu -->
        <div class="navbar">
            <img class="logo" src="style/images/logo.svg" alt="logo bienes raices">
            <nav class="nav_links">
                    <a href="index.php">Inicio</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="login.php">Iniciar Sesion</a>                
            </nav>
        </div>
        
        <!-- text -->
    </header>
    <section id="casas_en_venta">
        <div class="carousel-inner" style="width: 100%; height: 50vh;">
            <div class="carousel-item active">
                <img src="{{ $casas['imagen'] }}" class="d-block w-100" alt="..." style="width: 100%; height: 50vh;">
            </div>
        </div>
    </section>
    
    <div class="cuerpo">
        <div class="det-info">
            <h1>Detalles Generales De la propiedad</h1>
            <div class="det-gen">
                <h2>{{ $casas['nombre_casa'] }}</h2>
                <h2 class="precio">${{ $casas['precio'] }}</h2>
            </div>
            <div class="det-icon">
                <h2 class="tit">Detalles generales</h2><br>
                <img src="style/images/icono_wc.svg" alt=""> <span>Baños: {{ $casas['baños'] }}</span>
                <img src="style/images/icono_estacionamiento.svg" alt="">Estacionamiento: <span>{{ $casas['carro'] }}</span>
                <img src="style/images/icono_dormitorio.svg" alt=""> <span>Habitaciones: {{ $casas['habitaciones'] }}</span><br><br>
                <img src="style/images/m2.png" alt="" style="width: 35px; height: 35px;"> <span>Terreno: {{ $casas['m2'] }}m2</span>
            </div>
            <div class="det-contenido">
                <h2 class="tit">Esta propiedad está en {{ $categoria['nombre_venta'] }}</h2>
                <h2 class="ubi">Ubicada en {{ $casas['ubicacion'] }}</h2><br>
                <h2 class="tit">Descripción</h2><br>
                <h2 class='des'>{{ $casas['descripcion'] }}</h2>
            </div>
        </div>
    
        <div class="det-mensaje" id="module1">
            <h1>Mensaje</h1>
            <div class="det"> 
                <h2 class="tit" style="float: left;">Teléfono del propietario:</h2>
                <h2 style="font-size: 20px; color: orange;float: right;">{{ $usuarios['telefono'] }}</h2><br>
                <h2 class="tit" style="float: left;">Nombre del propietario:</h2>
                <h2 style="font-size: 20px; color: orange;float: right;">{{ $usuarios['nombre_usuario'] }}</h2>
            </div><br><br>
            <form>
                @csrf
                <div class="row mb-3">
                    <h2 class="tit">Nombre</h2>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre"  name="nombre" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <h2 class="tit">Email</h2>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email"  name="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <h2 class="tit">Teléfono</h2>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="celular" name="celular" maxlength="10" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="mensajetxt" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensajetxt" rows="3" name="mensaje" required></textarea>
                </div>
                <input type="hidden" id="idcasa" name="id_casa" value="{{ $casas['id_casa'] }}">
                <input type="hidden" id="iduser" name="id_usuarios" value="{{ $usuarios['id_usuarios'] }}">
                <input type="button" name="envform" id="mensaje" value="Enviar" onclick="sendmessage()">
            </form>
        </div>
    </div>    
</html>