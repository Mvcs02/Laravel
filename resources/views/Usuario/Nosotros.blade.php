@extends('plantilla')
    @section('contenido')
    <section id="conocenos_nosotros">

        <h2>Conoce Sobre Nosotros</h2><br>

        
            <div class="row g-0" style="padding: 20px;">
              <div class="col-md-4" >
                <img src="style/images/anuncio1.jpg" class="img-fluid rounded-start" alt="..." >
              </div>
              <div class="col-md-8">
                <div class="card-body" style="padding: 20px;">
                  <h5 class="card-title">Informacion</h5>
                  <p class="card-text">Somos mucho más que una empresa de bienes raíces; somos tus aliados en la búsqueda y materialización de tus sueñ
                    os de hogar. Nuestra historia está cimentada en décadas de compromiso y excelencia, guiados por los pilares de transparencia, integ
                    ridad y profesionalismo. Con un equipo apasionado y altamente capacitado, nos esforzamos por entender tus necesidades individuales
                     y proporcionarte soluciones personalizadas que superen tus expectativas. Más allá de las propiedades, construimos relaciones dura
                     deras, y nuestra participación activa en la comunidad refleja nuestro compromiso con un futuro próspero para todos. Si buscas com
                     prar, vender o alquilar una propiedad, o simplemente necesitas asesoramiento experto, T&C Inmobiliaria está aquí para guiar tu via
                     je con confianza y éxito.</p>
                </div>
              </div>
            </div>
          </div>
          <div id="map"></div>
        <script src="js/script.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
        </div>
    </section>
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
            <p>Reconocemos que el aspecto financiero es esencial en cualquier decisión inmobiliaria. En T&C Inmobiliaria, nos comprometemos a obten
                er para ti el mejor precio posible, ya sea en la compra, venta o alquiler de una propiedad. Nuestra profunda comprensión del mercad
                o y nuestra habilidad para negociar nos permiten maximizar el valor de tu inversión. Trabajamos arduamente para asegurarnos de que 
                cada transacción sea equitativa y beneficiosa para ti, respaldando así tu éxito financiero y asegurando que obtengas el máximo rend
                imiento de tus operaciones inmobiliarias con nosotros.</p>
        </div>
        <div>
            <img src="style/images/icono3.svg" alt="icono de un reloj">
            <h3>A TIEMPO</h3>
            <p>Entendemos que tu tiempo es valioso y que las oportunidades en el mundo inmobiliario no esperan. En T&C Inmobiliaria, nos enorgullecem
                os de nuestra eficiencia y compromiso para cumplir plazos precisos. Nuestro equipo altamente organizado y diligente se esfuerza por g
                arantizar que cada paso del proceso, desde la búsqueda hasta la entrega, se realice puntualmente. Nos comprometemos a mantenerte info
                rmado y a anticiparnos a cualquier desafío potencial, asegurando que tu experiencia con nosotros sea sin contratiempos y te permita a
                provechar cada oportunidad en el momento adecuado.</p>
        </div>
    </section>
    @endsection
