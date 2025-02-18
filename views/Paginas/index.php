<?php 
    include_once __DIR__ . '/conferencias.php';
?>

<section class="resumen">
    <div class="resumen__grid">
        <div class="resumen__bloque">
            <p class="resumen__texto--numero"><?php echo $ponentes ?></p>
            <p class="resumen__texto">speakers</p>
        </div>

        <div class="resumen__bloque">
            <p class="resumen__texto--numero"><?php echo $conferencias?></p>
            <p class="resumen__texto">conferencias</p>
        </div>

        <div class="resumen__bloque">
            <p class="resumen__texto--numero"><?php echo $workshops?></p>
            <p class="resumen__texto">workshop</p>
        </div>

        <div class="resumen__bloque">
            <p class="resumen__texto--numero">500</p>
            <p class="resumen__texto">asistentes</p>
        </div>
    </div>
</section>

<section class="speakers">
    <h2 class="speakers__heading">Speakers</h2>
    <p class="speakers__descripcion">Conoce a nuestros profesionales en la Tecnologia</p>

    <?php foreach($ponentes as $ponente) { ?>


    <?php } ?>

</section>