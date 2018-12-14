<h2 class="h2-buscarAvanzado">Alta usuario:</h2>

<section class="buscarAvanzadoContenedor">
        <form class="formCenter" action="/index/user/insert.php" method ="post" id="miform">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre..." maxlength="128" onblur="validarUsuario('nombre', this.value)">
                <input type="text" id="apellido" name="apellido" placeholder="Apellido..." maxlength="128" onblur="validarUsuario('apellido', this.value)">
                <input type="text" id="dni" name="dni" placeholder="DNI..." maxlength="128" onblur="validarUsuario('dni', this.value)">
                <input type="Tel" id="telefono" name="telefono" placeholder="Teléfono..." maxlength="128" onblur="validarUsuario('telefono', this.value)">
                <input type="email" id="email" name="email" placeholder="suMail@ejemplo.com.ar" maxlength="128" onblur="validarUsuario('email', this.value)"><br>
                <input type="submit"  name="submitbtn" value="Cargar">
                <input type="reset" value="Limpiar">
        </form>
</section>  

<!--<script src="/scripts/checkForms.js"></script> ->
