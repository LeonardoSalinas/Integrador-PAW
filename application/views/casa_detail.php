<section class="detallesSlider">

    <article class="detallesSliderContenedor" id="detallesSliderContenedor">			
        <figure class="mySlide" style="display: block;">
          <img src="/images/interior01.jpg" alt="foto del interior de la propiedad">
          <figcaption class="slideDesc">Living</figcaption>
        </figure>
    </article>
</section>
    <?php $casa = $data['casas'];
            foreach ($casa as $mi_casa){?>

	<section class="infoPropiedad">
		<div class="descInfoPropiedad">
			<ul>
				<li>Ciudad: <?=$mi_casa['ciudad']?></li>
				<li>Dirección: <?=$mi_casa['direccion']?></li>
                                <li>Transaccion: <?=$mi_casa['transaccion']?></li>
                                <li>Tipo: <?=$mi_casa['tipo']?></li>
                                <li>Ambientes: <?=$mi_casa['ambientes']?></li>
				<li>Dormitorios: <?=$mi_casa['dormitorios']?></li>
				<li>Garage: <?=$mi_casa['garage']?></li>
				<li>Patio: <?=$mi_casa['patio']?></li>
				<li>Metros cuadrados: <?=$mi_casa['metros2']?></li>
                                <li>Ubicación: <?=$mi_casa['ubicacion']?></li>
                                <li>Estado: <?=$mi_casa['estado']?></li>
                                <li>Precio: <?=$mi_casa['precio']?></li>
                                <li style="display:none" id='coord'><?=$mi_casa['coordenadas']?></li>
                                
                                <li><a href="/index/image/create.php?id_casa=<?=$mi_casa['id_casa']?>"> <button class="button01">Subir Imagen</button></a></li>
			</ul>
		</div>

		<div class="googleMapInfoPropiedad" id="googleMap"></div>
            <?php }?>
	</section>


<script>
	var contenedorId = "detallesSliderContenedor";
</script>

<script type="text/javascript" src="/scripts/sliders.js"></script>
<script type="text/javascript" src="/scripts/googleMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm3i2vw14LOJYRYWjXCsPl19zpKRYHCK0&callback=myMap"></script>

