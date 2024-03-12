@extends('plantillaadmin')
@section('contenidoadmin')

<div class="view">
    <table>
        <tr class="tr-title">
            <td>Clave Usuario</td>
            <td>Nombre Completo</td>
            <td>email</td>
            <td>telefono</td>
            <td>mensaje</td>
            <td>Eliminar</td>
        </tr>
        <?php /* echo $nfilas;
         while($clientes=mysqli_fetch_array($resultado)) {?>
        <input type="text" id="idcont" value="<?php echo $clientes['id_contacto'] */ ?>
        <tr class="tr-info">
            <td><?php/*  echo $clientes['id_contacto'] */?></td>
            <td><?php /* echo $clientes['nombre'] */?></td>
            <td><?php /* echo $clientes['email'] */?></td>
            <td><?php /* echo $clientes['telefono'] */?></td>
            <td><?php /* echo $clientes['mensaje'] */?></td>
            <td><button onclick="smsdel()">Eliminar</button></td>
        </tr>
        <?php/* } */?>
    </table>
</div>
</div>
@endsection