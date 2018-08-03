<h2 class="h2-mensajes">Mensajes</h2>
    <section class="mensajesContenedor">
        <div>         
           <?php $messages = $data['messages'];        
             foreach($messages as $fila){ ?>
                <a href="/index/message/delete.php?id_mensaje=<?php echo trim($fila["id_mensaje"]);?>"> <button>Eliminar</button></a>
                    <ul>
                        <li><p>Nombre: <?php echo trim($fila["nombre"]);?></p></li>
                        <li><p>Email: <?php echo trim($fila["email"]);?></p></li>
                        <li><p>Teléfono: <?php echo trim($fila["telefono"]);?></p></li>
                        <li><p>Fecha: <?php echo trim($fila["fecha"]);?></p></li>
                    </ul>
                <article>
                        <p><?php echo trim($fila["texto"]);?></p>
                </article>
             <?php } ?>
        </div>

    </section>
