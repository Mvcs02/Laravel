@extends('plantillaadmin')
@section('contenidoadmin')
<div class="admin-container">
    <div class="edite">
    <form name="update_form" id="userForm" class="admin-cli-edite" enctype="multipart/form-data">
            <div class="admin-style">
                <label for="id_casa"></label>
                <input type="hidden" id="idcasa" name="id_casa" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['id_casa']."'disabled "; } */ ?>placeholder="Clave" class="register-ipt" readonly><br>
                <label for="nombre_casa">Titulo del articulo</label>
                <input type="text" name="nombre_casa" pattern="[a-z A-ZÀ-ÿ\u00f1\u00d1]{1,150}" title="El nombre no puede incluir caracteres raros y no debe ser mayor a 150 caracteres" placeholder="Titulo" class="register-ipt" id="nombre_casa" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['nombre_casa']."' "; } */ ?>>
            </div>
            <div class="admin-style">
                <label for="precio">Precio</label>
                <input type="number" name="precio" pattern="{1,100}" title="No debe ser mayor a 100 caracteres" placeholder="Precio" class="register-ipt" id="precio" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['precio']."' "; } */ ?>>
                <label for="habitaciones">Habitaciones</label>
                <input type="number" name="habitaciones" pattern="{1,2}"  placeholder="Habitaciones" class="register-ipt" id="habitaciones" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['habitaciones']."' "; } */ ?>>
            </div>
            <div class="admin-style">
                <label for="baños">Baños</label>
                <input type="number" name="baños" pattern=".{1,2}"  placeholder="Baños de la propiedad" class="register-ipt" id="baños" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['baños']."' "; } */ ?>>
                <label for="carro">Capacidad del garaje</label>
                <input type="number" name="carro" placeholder="Gareges de la propiedad" class="register-ipt" id="carro" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['carro']."' "; } */ ?>>
             </div>
            <div class="admin-style">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="29" rows="3" class="admin-area"><?php /* if(isset($_REQUEST['editar'])) {echo $reg['descripcion']; }  */?></textarea>
                <label for="m2">Metros Cuadrados</label>
                <input type="number" name="m2"  placeholder="Metros Cuadrados del Terreno" class="register-ipt" id="m2" <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['m2']."' "; } */ ?>></div>
            <div class="admin-style">
                <label for="estatus">Estatus</label>
                <select name="estatus" id="estatus" class="admin-style-new">
                    <option disabled selected> Selecciona un estatus</option>
                    <option value="0" <?php /* if(isset($_REQUEST['editar']) && $reg['estatus'] == 0) { echo "selected"; } */ ?>>Disponible</option>
                    <option value="1" <?php/*  if(isset($_REQUEST['editar']) && $reg['estatus'] == 1) { echo "selected"; } */ ?>>Ocupado</option>
                </select>
                <label for="ubicacion">Localizacion de la propiedad</label>
                <textarea name="ubicacion" id="ubicacion" cols="29" rows="3" class="admin-area"><?php /* if(isset($_REQUEST['editar'])) {echo $reg['ubicacion']; }  */?></textarea>
            </div>

          <?php /* if(isset($_REQUEST['editar'])) {echo "value='".$reg['imagen']."' "; } */?> accept="images/*" id="imagen">
            </div> -->
            <div class="admin-style">
            <span class="admin-btn-press">
            <label for="imagen" class="button_top -purple">Selecciona una Imágen</label>
               <input type="file" name="imagen" accept="images/*" id="imagen">
               </span>
            </div>
            <div class="admin-style-new">
            <select name="id_usuarios" id="id_usuarios" class="admin-style-new">
            <option disabled selected>Seleccione un usuario:</option>

            <?php
            /* $sql = "SELECT id_usuarios, nombre_usuario FROM usuarios;";
            $result = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['id_usuarios'] == $reg['id_usuarios']) ? "selected" : "";
                echo "<option value='" . $row['id_usuarios'] . "' $selected>" . $row['nombre_usuario'] . "</option>";} */
            ?>
            </select>
            <select name="id_venta" id="id_venta" class="admin-style-new">
                <option disabled selected>Venta/Renta</option>
                <option value="1" <?php /* if(isset($_REQUEST['editar']) && $reg['id_venta'] == 1) { echo "selected"; } */ ?>>Venta</option>
                <option value="2" <?php /* if(isset($_REQUEST['editar']) && $reg['id_venta'] == 2) { echo "selected"; } */ ?>>Renta</option>
            </select><br>
            <select name="id_ciudad" id="id_ciudad" class="admin-style-new">
            <option disabled selected>Seleccione una ciudad:</option>

            <?php
            /* $sql = "SELECT id_ciudad, nombre_ciudad FROM ciudades;";
            $result = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['id_ciudad'] == $reg['id_ciudad']) ? "selected" : "";
                echo "<option value='" . $row['id_ciudad'] . "' $selected>" . $row['nombre_ciudad'] . "</option>";} */
            ?>
            </select>
            </div>
            <?php 
            /* if(isset($_REQUEST['editar'])) {
                echo "<input type='hidden' name='clave' value='".$reg['id_casa']."' >";
               echo "<input type='hidden' id='archivo_mod' name='archivo_mod' value='".(isset($reg['imagen']) ? $reg['imagen'] : '')."'>";
              } */?>
            <span class="admin-btn-press"><?php
                /* if (isset($_GET['editar'])){ */
                    ?>
            <button type="button" name="updateform" id="userformedit" class="button_top -red" onclick="catartformedit(<?php /* echo $reg['id_casa']; */ ?>)">Aceptar</button>
                    
                    <?php
               /*  }else{ */
            ?>
            <button type="button" name="updateform" id="userform" class="button_top -red" onclick="catartform()">Aceptar</button>
            <?php
               /*  } */
            ?>
            </span>
        </form>
    </div>

    <div class="view">
        <table>
            <tr class="tr-title">
                <td>Clave Casa</td>
                <td>Titulo del articulo</td>
                <td>Imagen</td>
                <td>Precio</td>
                <td>Habitaciones</td>
                <td>Baños</td>
                <td>Garaje (capacidad)</td>
                <td>m2</td>
                <td>Ubicacion</td>
                <td>Descripción</td>
                <td>Estatus</td>
                <td>Usuario</td>
                <td>Venta/Renta</td>
                <td>Ciudad</td>
             <!--   <td>Editar</td>-->
                <td>Eliminar</td>
            </tr>
            <?php /* echo "Número de filas: ". $nfilas;
             while($casas=mysqli_fetch_array($resultado)) { */?>
            <tr class="tr-info">
                <td><?php/*  echo $casas['id_casa'] */?></td>
                <td><?php /* echo $casas['nombre_casa'] */?></td>
                <td><img src="<?php /* echo $casas['imagen'] */?>" alt="<?php/*  echo $casas['imagen'] */?>"></td>
                <td><?php /* echo $casas['precio'] */?></td>
                <td><?php /* echo $casas['habitaciones'] */?></td>
                <td><?php /* echo $casas['baños'] */?></td>
                <td><?php/*  echo $casas['carro'] */?></td>
                <td><?php /* echo $casas['m2'] */?></td>
                <td><?php/*  echo $casas['ubicacion'] */?></td>
                <td><?php /* echo $casas['descripcion'] */?></td>
                <td><?php /*  if ($casas['estatus']==0){echo "Disponible";}else{echo"Ocupado";} */?></td>
                <td><?php /* echo $casas['nombre_usuario'] */?></td>
                <td><?php /* echo $casas['nombre_venta'] */?></td>
                <td><?php /* echo $casas['nombre_ciudad'] */?></td>
               <td><a onclick="editart(<?php /* echo $casas['id_casa']; */ ?>)">Editar</a></td>
                <td><a onclick="delart(<?php /* echo $casas['id_casa']; */ ?>)">Eliminar</a></td>
            </tr>
            <?php /* } */?>
        </table>
    </div>
</div>
@endsection