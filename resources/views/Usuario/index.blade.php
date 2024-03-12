<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
    <link rel="stylesheet" href="style/main.css">
<head>
    <meta name="encoding" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- tITULO DE LA PAGINA --}}
    <title>SEDIT</title>
    <meta name="description" content="Venta de casas y departamentos exclusivos de lujo.">
    <link rel="shorcut icon" href="style/images/logo.svg" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <!------- HEADER ------->
    <header class="header">
        <!-- menu -->
        <div class="navbar">
            <img class="logo" src="style/images/logo.svg" alt="logo bienes raices">
            {{-- MENU NAVEGACION --}}
            <nav class="nav_links">
                    <a href="{{ route('index') }}">Inicio</a>
                    <a href="{{ route('Nosotros') }}">Nosotros</a>
                    <a href="{{ route('Anuncios') }}">Anuncios</a>
                    <a href="{{ route('Contacto') }}">Contacto</a>   
                    <a href="{{ route('login') }}">Iniciar Sesion</a>             
            </nav>
        </div>
        <!-- text -->
        <h2>Venta de Casas y Departamentos <br> Exclusivos de Lujo</h2>
    </header>
    <!------- MAS SOBRE NOSOTROS ------->
    <section id="sobre_nosotros">
        <h2>Más Sobre Nosotros</h2>
        <div>
            <img src="style/images/icono1.svg" alt="icono de un candado">
            <h3>SEGURIDAD</h3>
            <p>Entendemos que tomar decisiones en el mundo inmobiliario involucra confianza y tranquilidad. Por eso, en T&C Inmobiliaria, nos dedicamos
                 a garantizar tu seguridad en cada paso del proceso. Nuestra sólida reputación se basa en rigurosos controles y verificaciones, asegura
                 ndo la autenticidad y calidad de cada propiedad que representamos. Además, implementamos medidas avanzadas para proteger tus datos y 
                 transacciones. Tu bienestar y paz mental son fundamentales para nosotros, y trabajamos incansablemente para brindarte una experiencia
                  segura y confiable en todas tus interacciones con nosotros.</p>
        </div>
        <div>
            <img src="style/images/icono2.svg" alt="icono de billetes dinero">
            <h3>EL MEJOR PRECIO</h3>
            <p>Te aseguramos que obtendrás el mejor precio para tus transacciones i
                nmobiliarias. Nuestra dedicación a la investigación del mercado y a las negociaciones hábiles nos pe
                rmite garantizar que obtendrás un valor inigualable. Trabajamos incansablemente para asegurar que tus
                 inversiones inmobiliarias sean financieramente gratificantes.</p>
        </div>
        <div>
            <img src="style/images/icono3.svg" alt="icono de un reloj">
            <h3>A TIEMPO</h3>
            <p>comprendemos la importancia de los plazos. Nos comprometemos a brindarte un servicio puntual en c
                da etapa de tu experiencia inmobiliaria. Desde la presentación de propuestas hasta la conclusió
                n de transacciones, puedes confiar en que cumpliremos con los plazos acordados. Tu tiempo es vali
                oso, y lo tratamos con el máximo respeto.<p>
        </div>
    </section>
    <!------- CASAS Y DEPAS EN VENTA ------->
<section id="casas_en_venta">
        <h2>Casas y Depas en Venta</h2>
        <div id="anuncios">
            <!------- Anuncio ------->
            <div class="anuncio">
                <img src="<?php /* echo $data['imagen'];  */?>" alt="">
                <h3><?php/*  echo $data['nombre_casa']; */ ?></h3>
                <p class="precio">$<?php /* echo $data['precio']; */?></p>
                <div class="iconos">
                    <img src="style/images/icono_wc.svg" alt=""> <span><?php /* echo $data['baños'];  */?></span>
                    <img src="style/images/icono_estacionamiento.svg" alt=""> <span><?php /* echo $data['carro']; */ ?></span>
                    <img src="style/images/icono_dormitorio.svg" alt=""> <span><?php /* echo $data['habitaciones']; */ ?></span>
                </div>
                <a href="det_anuncio.php?id_casa=<?php /* echo $data['id_casa'];  */?>"><button>Contactar</button></a>
            </div>
        </div>
        </div>
    </section>
    <div class="btn-todas">
        <a href="anuncios.php"><button>VER TODAS</button></a>
    </div>
    <section>
        <div id="casa_sueños">
            <h1>Encuentra la casa de tus sueños</h1>
            <p>Llená el formulario de Contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
            <button >CONTÁCTANOS</button>
        </div>
    </section>
    <section id="ultima_seccion">
        <div id="nuestro_blog">
            <h1>Nuestro Blog</h1>
            <div class="entrada_blog">
                <img src="style/images/blog1.jpg" alt="">
                <div>
                    <h1>Terraza en el techo de tu casa</h1>
                    <div class="linea"></div>
                    <p>Escrito el:<span>20/10/19</span> por:<span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa, on los mejores materiales y ahorrando dinero.</p>    
                </div>
            </div>
            <div class="entrada_blog">
                <img src="style/images/blog2.jpg" alt="">
                <div>
                    <h1>Guía para la decoración de tu hogar</h1>
                    <div class="linea"></div>
                    <p>Escrito el:<span>20/10/19</span> por:<span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>    
                </div>
            </div>
        </div>
        <div id="testimoniales">
            <h1>Testimoniales</h1>
            <div>
                <i class="fas fa-quote-left"></i>
                <p>  El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                    <span>- Juan de la Torre</span>
                </p>
            </div>
        </div>
    </section>
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