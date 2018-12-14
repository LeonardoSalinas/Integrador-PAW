<h2 class="h2-Alquilar">Casas:</h2>

<section class="menuAlquileres">
     <?php $casas = $data['casas'];
        $n = 0;
        foreach($casas as $fila){ ?>
	<div class="itemAlquiler">
            <figure class="fotoItemAlquiler">
                <img class="miniSlide<?= $n?>" src="/images/casa01.jpg" alt="foto de la propiedad">
                <img class="miniSlide<?= $n?>" src="/images/casa02.jpg" alt="foto de la propiedad">
                <img class="miniSlide<?= $n?>" src="/images/casa03.jpg" alt="foto de la propiedad">
            </figure>
            <article class="descItemAlquiler">
                <ul>
                    <li>Ambientes: <?= $fila['ambientes']?></li>
                    <li>Dormitorios: <?= $fila['dormitorios']?></li>
                    <li>Garage: <?= $fila['garage']?></li>
                    <li>Patio: <?= $fila['patio']?></li>
                </ul>
            </article>
            <a href="/index/casa/detail.php?id_casa=<?php echo $fila['id_casa']?>"><button class="button01">Más detalles &#10095;</button></a>
	</div>
    <?php $n +=1;} ?>
</section>
<script type="text/javascript" src="/scripts/autoCarrusel.js"></script>
