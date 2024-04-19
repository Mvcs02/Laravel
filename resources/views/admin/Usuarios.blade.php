@extends('plantillaadmin')
@section('contenidoadmin')

<div class="admin-container" id="module4">
    <div class="edite">
        <form name="update_form" id="userForm" class="admin-cli-edite"  enctype="multipart/form-data">
             <div class="admin-style">
                <label for="id_usuarios"></label>
                <input type="hidden" id="iduser" name="id_usuarios" <?php/*  if(isset($_REQUEST['editar'])) {echo "value='".$reg['id_usuarios']."'disabled "; } */ ?>placeholder="(No nescesitas introducir nada aqui)" class="register-ipt" readonly><br>
            </div>
            <div class="admin-style">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre_usuario" pattern="[a-z A-ZÀ-ÿ\u00f1\u00d1]{1,150}" title="El nombre no puede incluir caracteres raros y no debe ser mayor a 150 caracteres" placeholder="Nombre Completo" class="register-ipt" id="nombre" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['nombre_usuario']."' "; }  */?>>
            </div>
            <div class="admin-style">
            <label for="id_ciudad">Ciudad:</label>
            <select name="id_ciudad" id="id_ciudad" class="admin-style-new">
            <option disabled selected>Seleccione una ciudad:</option>
            </select>
            </div>
            <div class="admin-style">
                <label for="correo">Correo</label>
                <input type="email" name="correo" pattern="{1,100}" title="El correo no debe ser mayor a 100 caracteres" placeholder="Correo" class="register-ipt" id="correo" <?php/*  if(isset($_REQUEST['editar'])) {echo "value='".$reg['correo']."' "; } */ ?>>
            </div>
            <div class="admin-style">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" pattern=".{1,15}" title="El nombre de usuario no debe ser mayor a 15 caracteres" placeholder="Nombre de Usuario" class="register-ipt" id="usuario" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['usuario']."' "; } */ ?>>
            </div>
            <div class="admin-style">
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Contraseña" class="register-ipt" id="contraseña" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['contraseña']."' "; } */ ?>>
            </div>
            <div class="admin-style">
                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" maxlength="10" placeholder="Teléfono" pattern="[0-9]{10,}" title="Ingrese un número de telefono valido" class="register-ipt" id="telefono" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['telefono']."' "; } */ ?>>
            </div>
            <div class="admin-style">
                <label for="id_rol">Rol:</label>
                <select name="id_rol" id="id_rol" class="admin-style-new">
                <option disabled selected>Seleccione un rol</option>
                </select>
            </div>
            <span class="admin-btn-press">
            <!--<input type="submit" name="Aceptar" class="button_top -red" value="Aceptar" onclick="return validarFormulario();">-->
            <button type="button" name="envform" id="envform" class="button_top -red" onclick="sendformadmin()">Aceptar</button>
            </span>
        </form>
    </div>
    <div class="view">
        
        <table>
            <tr class="tr-title">
                <td>Clave Usuario</td>
                <td>Nombre Completo</td>
                <td>Ciudad</td>
                <td>Correo</td>
                <td>Usuario</td>
                <td>Contraseña</td>
                <td>Teléfono</td>
                <td>Rol</td>
            <!--    <td>Editar</td>-->
                <td>Eliminar</td>
            </tr>
            @foreach($usuarios as $u)
            <tr class="tr-info">
                <td>{{ $u->id_usuarios }}</td>
                <td>{{ $u->nombre_usuario }}</td>
                <td>{{ $u->ciudades->nombre_ciudad }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->user }}</td>
                <td>{{ $u->password }}</td>
                <td>{{ $u->telefono }}</td>
                <td>{{ $u->id_rol }}</td>
              <!--  <td><a onclick="edituser(<?php /* echo $clientes['id_usuarios']; */ ?>)">Editar</a></td>-->
                <td><a onclick="deluser(<?php /* echo $clientes['id_usuarios']; */ ?>)">Eliminar</a></td>
            </tr>
            @endforeach
            <?php /* } */?>
        </table>
        
    </div>
</div>
@endsection