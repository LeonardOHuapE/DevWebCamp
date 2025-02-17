<div class="evento swiper-slide">
    <p class="evento__hora"><?php echo $evento->hora->hora;?></p>

    <div class="evento__info">
        <h4 class="evento__titulo"><?php echo $evento->nombre;?></h4>
        <p class="evento__detalles"><?php echo $evento->descripcion?></p>
        <div class="evento__autor">

        <picture>
            <source srcset="img/speakers/<?php echo $evento->ponente->imagen; ?>.webp" type="image/webp">
            <source srcset="img/speakers/<?php echo $evento->ponente->imagen; ?>.png" type="image/png">
            <img class="evento__imagen" src="img/speakers/<?php echo $evento->ponente->imagen; ?>.png" alt="Imagen Actual">
        </picture>

            <div class="evento__nombre"><?php echo $evento->ponente->nombre . " " . $evento->ponente->apellido?></div>
        </div>
    </div>
</div>
