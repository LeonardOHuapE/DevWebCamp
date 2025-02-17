<main class="agenda">
    <h2 class="agenda__heading"><?php echo $titulo?></h2>
    <p class="agenda__descripcion">Todos los eventos son realizados por nuestros profesionales</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt; Conferencias /></h3>
        <div class="eventos__fecha">Viernes 14 de Marzo</div>

        <div class="eventos__listado slider swiper"> <!-- slider para selecioner con js y swiper para agrgar styles con la libreria -->
            <div class="swiper-wrapper"> <!-- Es nesesario agregar este componente para la libreria -->

                <?php foreach($eventos['conferencias_v'] as $evento) { ?>
                    <div class="evento">
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

                <?php }?>

            </div>
        </div>

        <div class="eventos__fecha">Sabado 15 de Marzo</div>
        <div class="eventos__listado"></div>
    </div>

    <div class="eventos--workshop">
        <h3 class="eventos__heading">&lt; WorkShops /></h3>
        
        <div class="eventos__fecha">Viernes 14 de Marzo</div>
        <div class="eventos__listado"></div>

        <div class="eventos__fecha">Sabado 15 de Marzo</div>
        <div class="eventos__listado"></div>
    </div>
</main>