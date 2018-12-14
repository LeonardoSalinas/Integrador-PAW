<h2 class="h2-contacto">¿Alquila o vende su propiedad? Consúltenos...</h2>
<h2 class="h2-contacto">Deje sus datos y responderemos a la brevedad.</h2>

<section class="formContactoContenedor">
        <form class="formCenter" action="/index/message/create.php"" method = "post" id="formContacto">
                <input type="text" name="nombre" placeholder="Ingrese su nombre...">
                <input type="email" name="email" placeholder="suMail@ejemplo.com.ar">
                <input type="tel" name="telefono" placeholder="Ingrese su teléfono...">
                <textarea name="mensaje" rows="5" placeholder="Mensaje..." form="formContacto"></textarea>
                <input type="submit" name="submit" value="Enviar">
                <input type="reset" value="Limpiar">
        </form>
</section>

print 'aca voy';
