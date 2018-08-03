<h2 class="h2-buscarAvanzado">Alta Imagen:</h2>


<section class="buscarAvanzadoContenedor">

                <form action="/index/image/upload.php?id_casa="<?= $_GET['id_casa']?> method ="post" enctype="multipart/form-data">

                <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion..." maxlength="128">
                <input type="file" accept="image/jpeg, image/png, image/bmp" name="upload"><br>
                <input type="submit" name="submit" value="Subir">
                <input type="reset" value="Limpiar">
        </form>
</section>