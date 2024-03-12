function sendmessage(){
    //en esta seccion obtengo los id's de los campos y los asigno a una variable
    let nombre = document.getElementById('nombre').value;
    let mensaje = document.getElementById('mensajetxt').value;
    let email = document.getElementById('email').value;
    let celular = document.getElementById('celular').value;
    let idcasa = document.getElementById('idcasa').value;
    let iduser = document.getElementById('iduser').value;
    //obtengo el area del div con el que trabajare
    let module1 = document.getElementById('module1');
    //almaceno el contenido original del div en una variable
    let originalContent = module1.innerHTML;
    //defino un if que evalua si los campos estan vacios y envia una aleta para que se rellenen
    if ( nombre.length === 0 || email.length === 0 || celular.length === 0 || mensaje.length === 0) {
        alert ("porfavor rellene los campos vacios");  
    }else{
        //creo un array con las variables para contener todos los campos en una unica variable
    let arr = [nombre, mensaje, email, celular, idcasa, iduser];
    //convierto este array en un formato json
    let jsonData = JSON.stringify(arr);
    //creo una variable xhr (xmlhttprequest) para crear la instancia de xmlhttp
    let xhr = new XMLHttpRequest();
        //defino una funcion que se ejecutara cuando la respuesta del xhr se complete
        xhr.onload = function () {
            //evalua si la respuesta es exitosa
            if (xhr.status === 200) {
                //recupero un archivo json de la ruta a la que envie los datos por xhr y lo guardo en una variable
                const response = JSON.parse(xhr.responseText);
                //si el estado en el archivo json es exitoso, actualizo el contenido del div con un mensaje
                if (response.status === "success") {
                  module1.innerHTML = `<h2>${response.message}</h2>`;
                  // Después de cierto tiempo (por ejemplo, 5 segundos), restaura el contenido original
                  setTimeout(function() {
                    module1.innerHTML = originalContent;
                  }, 5000); // 5000 milisegundos (5 segundos)
                } else {
                  console.log('Hubo un error al procesar la solicitud.');//si la respuesta de estado del json de diferente de exitoso, mando un mensaje de error
                }} }
        //indico que abra el archivo enviar-det-anuncio.php con el metodo GET y pase el array de variables como la variable r
        xhr.open("GET", "http://localhost/php/bienesraices-master/enviar-det-anuncio.php?r=" + jsonData);
        //envia las variables recogidas (arr = r) a la ruta indicada con el metodo GET
        xhr.send();}}
function salesfun(){
    let module2 = document.getElementById('module2');
    let xhr = new XMLHttpRequest();
        xhr.onload = function (){
        module2.innerHTML = xhr.responseText;
        }
    xhr.open("GET", "http://localhost/php/bienesraices-master/renta_anuncios.php?id_venta=" + 1);
    xhr.send();
}

function rentfun(){
    let module2 = document.getElementById('module2');
    let xhr = new XMLHttpRequest();
        xhr.onload = function (){
        module2.innerHTML = xhr.responseText;
        }
    xhr.open("GET", "http://localhost/php/bienesraices-master/renta_anuncios.php?id_venta=" + 2);
    xhr.send();
}

function sendinfcont(){
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let mensaje = document.getElementById('messagge').value;
    let tel = document.getElementById('tel').value;
    if (nombre.length === 0 || email.length === 0 || tel.length === 0 || mensaje.length === 0) {
        alert ("porfavor rellene los campos vacios");
        
    }else{
        let arr = [nombre, email, mensaje, tel];
        let jsonData = JSON.stringify(arr);
        let module3 = document.getElementById('module3');
        let originalContent = module3.innerHTML;
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            
                  module3.innerHTML = `<h2>Mensaje enviado</h2>`;
                  setTimeout(function() {
                    module3.innerHTML = originalContent;
                  }, 3000);
                  
            }
            xhr.open("GET", "http://localhost/php/bienesraices-master/contacto.php?r=" + jsonData);
                    xhr.send();
        }
        
    }

    function mainmenu(){
        let module4 = document.getElementById("module4");
        let xhr = new XMLHttpRequest();
        xhr.onload = function (){
            module4.innerHTML = xhr.responseText;
        }
        xhr.open("GET", "http://localhost/php/bienesraices-master/mainmenu.php", true);
        xhr.send();
    }

function catart(){
    let module4 = document.getElementById("module4");
        let xhr = new XMLHttpRequest();
        xhr.onload = function (){
            module4.innerHTML = xhr.responseText;
        }
        xhr.open("GET", "http://localhost/php/bienesraices-master/cat_articulos.php", true);
        xhr.send();
}

function messagges(){
    let module4 = document.getElementById("module4");
        let xhr = new XMLHttpRequest();
        xhr.onload = function (){
            module4.innerHTML = xhr.responseText;
        }
        xhr.open("GET", "http://localhost/php/bienesraices-master/mensajes.php", true);
        xhr.send();
}

function adcity(){
    let module4 = document.getElementById("module4");
    let xhr = new XMLHttpRequest();
    xhr.onload = function (){
        module4.innerHTML = xhr.responseText;
    }
    xhr.open("GET", "http://localhost/php/bienesraices-master/añadir_ciudad.php", true);
    xhr.send();
}


function catartform(){
    let idcasa = document.getElementById('idcasa').value;
    let nombrecasa = document.getElementById('nombre_casa').value;
    let precio = document.getElementById('precio').value;
    let habitaciones = document.getElementById('habitaciones').value;
    let baños = document.getElementById('baños').value;
    let garaje = document.getElementById('carro').value;
    let desc = document.getElementById('descripcion').value;
    let area = document.getElementById('m2').value;
    let estado = document.getElementById('estatus').value;
    let loc = document.getElementById('ubicacion').value;
    let user = document.getElementById('id_usuarios').value;
    let venta = document.getElementById('id_venta').value;
    let ciudad = document.getElementById('id_ciudad').value;
    let imgInput = document.getElementById('imagen');
    let selectedFile = imgInput.files[0];   
    let imgname = selectedFile.name;

    if (nombrecasa.length == 0 || precio.length == 0 ||habitaciones.length == 0 ||baños.length == 0 ||garaje.length == 0 ||desc.length == 0 ||area.length == 0 ||estado.length == 0 ||loc.length == 0 ||user.length == 0 ||venta.length == 0 ||
        ciudad.length == 0 || imgInput.length == 0) {
        alert("rellena todos los campos, por favor");
    }else{
        let arr = [idcasa,nombrecasa, imgname, precio, habitaciones, baños, garaje, area, loc, desc, estado,  user, venta, ciudad];
        let jsonData = JSON.stringify(arr);
        let module4 = document.getElementById('module4');
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            console.log(jsonData);
                  module4.innerHTML = `<h2>Registro exitoso</h2><br><button onclick="catart()">ok</button>`;
                  /*setTimeout(function() {
                    module4.innerHTML = originalContent;
                  }, 3000);*/
                  
            }
            xhr.open("GET", "http://localhost/php/bienesraices-master/cat_articulos.php?r=" + jsonData);
                    xhr.send();
    }
}

function smsdel(){
    let id = document.getElementById('idcont').value;
    let module4 = document.getElementById('module4');
    let originalContent;

    // Realizar una solicitud para obtener el contenido original
    let originalContentRequest = new XMLHttpRequest();
    originalContentRequest.onload = function () {
        if (originalContentRequest.status === 200) {
            originalContent = originalContentRequest.responseText;

            // Realizar la solicitud para eliminar el registro
            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    module4.innerHTML = `<h2>Registro eliminado</h2><br><button onclick="messagges()">ok</button>`;

                    /*setTimeout(function () {
                        // Después de mostrar el mensaje, actualiza la vista
                        module4.innerHTML = document.getElementById('module4');
                    }, 3000);*/
                }
            };

            // Realiza la solicitud de eliminación
            xhr.open("GET", "http://localhost/php/bienesraices-master/mensajes.php?r=" + id);
            xhr.send();
        }
    };

    // Realiza la solicitud para obtener el contenido original
    originalContentRequest.open("GET", "http://localhost/php/bienesraices-master/mensajes.php", true);
    originalContentRequest.send();
}

function menuvendedor(){
    let module5 = document.getElementById("module5");
        let xhr = new XMLHttpRequest();
        xhr.onload = function (){
            module5.innerHTML = xhr.responseText;
        }
        xhr.open("GET", "http://localhost/php/bienesraices-master/mainmenuvend.php", true);
        xhr.send();
}

function messaggesvend(){
    let module5 = document.getElementById("module5");
        let xhr = new XMLHttpRequest();
        xhr.onload = function (){
            module5.innerHTML = xhr.responseText;
        }
        xhr.open("GET", "http://localhost/php/bienesraices-master/mensajes_vendedor.php", true);
        xhr.send();
}

function smsdel2(){
    let id = document.getElementById('idcont').value;
    let module5 = document.getElementById('module5');
    let originalContent;

    // Realizar una solicitud para obtener el contenido original
    let originalContentRequest = new XMLHttpRequest();
    originalContentRequest.onload = function () {
        if (originalContentRequest.status === 200) {
            originalContent = originalContentRequest.responseText;

            // Realizar la solicitud para eliminar el registro
            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    module5.innerHTML = `<h2>Registro eliminado</h2>`;
                    setTimeout(function () {
                        // Después de mostrar el mensaje, actualiza la vista
                        module5.innerHTML = originalContent;
                    }, 3000);
                }
            };

            // Realiza la solicitud de eliminación
            xhr.open("GET", "http://localhost/php/bienesraices-master/mensajes_vendedor.php?eliminar=" + id);
            xhr.send();
        }
    };

    // Realiza la solicitud para obtener el contenido original
    originalContentRequest.open("GET", "http://localhost/php/bienesraices-master/mensajes_vendedor.php", true);
    originalContentRequest.send();
}

function delart(id){
    let module4 = document.getElementById('module4');
    let originalContent;

    // Realizar una solicitud para obtener el contenido original
    let originalContentRequest = new XMLHttpRequest();
    originalContentRequest.onload = function () {
        if (originalContentRequest.status === 200) {
            originalContent = originalContentRequest.responseText;

            // Realizar la solicitud para eliminar el registro
            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    module4.innerHTML = `<h2>Registro eliminado</h2><br><button onclick="catart()">ok</button>`;
                    /*setTimeout(function () {
                        // Después de mostrar el mensaje, actualiza la vista
                        module4.innerHTML = originalContent;
                    }, 3000);*/
                }
            };

            // Realiza la solicitud de eliminación
            xhr.open("GET", "http://localhost/php/bienesraices-master/cat_articulos.php?eliminar=" + id);
            xhr.send();
        }
    };

    // Realiza la solicitud para obtener el contenido original
    originalContentRequest.open("GET", "http://localhost/php/bienesraices-master/cat_articulos.php", true);
    originalContentRequest.send();
}

function editart(id){
    let module4 = document.getElementById('module4');


            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    module4.innerHTML = xhr.responseText;
                    
                }
            };

            
            xhr.open("GET", "http://localhost/php/bienesraices-master/cat_articulos.php?editar=" + id);
            xhr.send();
        }
    
function sendformadmin(){
    let username = document.getElementById('nombre').value;
    let user = document.getElementById('usuario').value;
    let pass = document.getElementById('contraseña').value;
    let correo = document.getElementById('correo').value;
    let rol = document.getElementById('id_rol').value;
    let ciudad = document.getElementById('id_ciudad').value;
    let tel = document.getElementById('telefono').value;
    if( username.length == 0 ||
        user.length == 0 || pass.length == 0 ||
        correo.length == 0 || rol.length == 0 ||
        ciudad.length == 0 || tel.length == 0){
            alert ("por favor, rellena todos los campos");
    }else{
        let arr = [username, user, pass, tel, ciudad, correo, rol];
        let jsonData = JSON.stringify(arr);
        let module4 = document.getElementById('module4');
        let originalContent = module4.innerHTML;
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            
                  module4.innerHTML = `<h2>Usuario registrado</h2><br><button onclick="mainmenu()">ok</button>`;
                  /*setTimeout(function() {
                    module4.innerHTML = originalContent;}
                  , 3000);*/
                  console.log(jsonData);
            }
            xhr.open("GET", "http://localhost/php/bienesraices-master/menu_admin.php?responseajax=" + jsonData);
                    xhr.send();
    }
}

function edituser(id){
    let module4 = document.getElementById('module4');
            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    module4.innerHTML = xhr.responseText; }}; 
            xhr.open("GET", "http://localhost/php/bienesraices-master/mainmenu.php?editar=" + id);
            xhr.send();
            console.log(id); }

function deluser(id){
    let module4 = document.getElementById('module4');
    let originalContent;

    // Realizar una solicitud para obtener el contenido original
    let originalContentRequest = new XMLHttpRequest();
    originalContentRequest.onload = function () {
        if (originalContentRequest.status === 200) {
            originalContent = originalContentRequest.responseText;

            // Realizar la solicitud para eliminar el registro
            let xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if (xhr.status === 200) {
                    module4.innerHTML = `<h2>Usuario eliminado</h2><br><button onclick="mainmenu()">ok</button>`;
                   /* setTimeout(function () {
                        // Después de mostrar el mensaje, actualiza la vista
                        module4.innerHTML = originalContent;
                    }, 3000);*/
                }
            };

            // Realiza la solicitud de eliminación
            xhr.open("GET", "http://localhost/php/bienesraices-master/mainmenu.php?eliminar=" + id);
            xhr.send();
        }
    };

    // Realiza la solicitud para obtener el contenido original
    originalContentRequest.open("GET", "http://localhost/php/bienesraices-master/mainmenu.php", true);
    originalContentRequest.send();
}

function catartformedit(id){
    let nombrecasa = document.getElementById('nombre_casa').value;
    let precio = document.getElementById('precio').value;
    let habitaciones = document.getElementById('habitaciones').value;
    let baños = document.getElementById('baños').value;
    let garaje = document.getElementById('carro').value;
    let desc = document.getElementById('descripcion').value;
    let area = document.getElementById('m2').value;
    let estado = document.getElementById('estatus').value;
    let loc = document.getElementById('ubicacion').value;
    let user = document.getElementById('id_usuarios').value;
    let venta = document.getElementById('id_venta').value;
    let ciudad = document.getElementById('id_ciudad').value;
    let imgInput = document.getElementById('imagen');
    let selectedFile = imgInput.files[0];   
    let imgname = selectedFile.name;
    let filemod = document.getElementById('archivo_mod').value

    if (nombrecasa.length == 0 || precio.length == 0 ||habitaciones.length == 0 ||baños.length == 0 ||garaje.length == 0 ||desc.length == 0 ||area.length == 0 ||estado.length == 0 ||loc.length == 0 ||user.length == 0 ||venta.length == 0 ||
        ciudad.length == 0 || imgInput.length == 0) {
        alert("rellena todos los campos, por favor");
    }else{
        let arr = [nombrecasa, imgname, precio, habitaciones, baños, garaje, area, loc, desc, estado,  user, venta, ciudad, filemod];
        let jsonData = JSON.stringify(arr);
        let module4 = document.getElementById('module4');
        let xhr = new XMLHttpRequest();
        xhr.onload = function(){
            console.log(jsonData);
                  module4.innerHTML = `<h2>Registro actualizado</h2><br><button onclick="catart()">ok</button>`;
                  /*setTimeout(function() {
                    module4.innerHTML = originalContent;
                  }, 3000);*/
                  
            }
            xhr.open("GET", "http://localhost/php/bienesraices-master/cat_articulos.php?clave=" + id + "&k=" + jsonData);
                    xhr.send();
    }
}