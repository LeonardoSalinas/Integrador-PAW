<h2 class="h2-buscarAvanzado">Alta Imagen:</h2>


<section class="buscarAvanzadoContenedor">

                <form class="formCenter" action="/index/image/upload.php?id_casa="<?= $_GET['id_casa']?> method ="post" enctype="multipart/form-data">

                <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion..." maxlength="128">
                <input type="file" accept="image/jpeg, image/png, image/bmp" name="upload"><br>
                <input type="submit" class="button01" name="submit" value="Subir">
                <input type="reset" class="button02" value="Limpiar">
        </form>
</section>
