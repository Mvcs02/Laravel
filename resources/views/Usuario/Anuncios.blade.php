@extends('plantilla')
    @section('contenido')
    <script src="http://localhost/php/bienesraices-master/js/jsfiles.js"></script>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
            integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
            crossorigin="anonymous" />  
        <!-- CSS -->
        <link rel="stylesheet" href="style/nosotros.css">
    </head>
    <section id="casas_en_venta">
        <h2>Casas y Departamentos:</h2>
        <div class="container-fluid">        
            <form class="d-flex" method="POST" action="">
                <button class="btn btn-outline-success" onclick="atras()" style="margin-right:7px;">Atras</button>
                <button type="button" name="ventas" id="ventas" class="btn btn-outline-success"style="margin-right:7px;" onclick="salesfun()">venta</button>
                <button type="button" name="rentas" id="rentas" class="btn btn-outline-success"style="margin-right:7px;" onclick="rentfun()">renta</button>
                <input class="form-control me-2" type="text" placeholder="Busqueda" name="busqueda" aria-label="busqueda">
                <button class="btn btn-outline-success">Buscar</button>
            </form>
            <div id="module2">
                <div id="anuncios"> 
                    <!------- Anuncio ------->
                    <div class="anuncio">
                        <img src="<?php /* echo $data['imagen']; */ ?>" alt="">
                        <h3><?php /* echo $data['nombre_casa']; */ ?></h3><br>
                        <p class="precio">{{-- $ --}}<?php/*  echo $data['precio']; */?></p><br>
                        <div class="iconos">
                            <img src="style/images/icono_wc.svg" alt=""> <span><?php /* echo $data['baños']; */ ?></span>
                            <img src="style/images/icono_estacionamiento.svg" alt=""> <span><?php/*  echo $data['carro']; */ ?></span>
                            <img src="style/images/icono_dormitorio.svg" alt=""> <span><?php/*  echo $data['habitaciones'];  */?></span>
                        </div>{{-- iconos --}}
                        <a href="det_anuncio.php?id_casa=<?php /* echo $data['id_casa'];  */?>"><button>Contactar</button></a>
                    </div>{{-- anuncio --}}
                </div> {{-- anuncios --}}
            </div>  {{-- module2 --}}
    </section>
@endsection