<h2 class="h2-usersList">Lista de Usuarios</h2>

<section class="usersList">
    
    <table>
        <tr class="usersListTitles">
            <td><p>Nombre</p></td>
            <td><p>Apellido</p></td>
            <td><p>DNI</p></td>
            <td><p>Teléfono</p></td>
            <td><p>Email</p></td>
            <td><p>Agregar</p></td>
            <!--<td><p>Editar</p></td>-->
            <td><p>Eliminar</p></td>
            
        </tr>
        <?php $users = $data['users'];
            
            foreach ($users as $fila){ ?>
                <tr>
                    <td><p><?= trim($fila["nombre"])?></p></td>
                    <td><p><?= trim($fila["apellido"])?></p></td>
                    <td><p><?= trim($fila["dni"])?></p></td>
                    <td><p><?= trim($fila["telefono"])?></p></td>
                    <td><p><?= trim($fila["email"])?></p></td>
                    <td><p><a href="/index/casa/create.php?id_usuario=<?php echo trim($fila["id_usuario"])?>"> <button class="button01">Agregar Casa</button></a></p></td>
                    <!--<td><p><a href="/index/home.php?=<?php echo trim($fila["id_usuario"])?>"> <button>Editar</button></a></p></td>-->
                    <td><p><a href="/index/user/delete.php?id_usuario=<?php echo trim($fila["id_usuario"])?>"> <button class="button01">Eliminar</button></a></p></td>
                </tr>
	<?php }?>
    </table>
    <a href="/index/user/create.php"><button class="button01">Nuevo Usuario</button></a>
</section>
