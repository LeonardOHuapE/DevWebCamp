<main class="agenda">
    <h2 class="agenda__heading"><?php echo $titulo?></h2>
    <p class="agenda__descripcion">Todos los eventos son realizados por nuestros profesionales</p>

    <div class="eventos">
        <h3 class="eventos__heading">&lt; Conferencias /></h3> <!-- Titulo del bloque -->

        <div class="eventos__fecha">Viernes 14 de Marzo</div>

        <div class="eventos__listado slider swiper"> <!-- slider para selecioner con js y swiper para agrgar styles con la libreria -->
            <div class="swiper-wrapper"> <!-- Es nesesario agregar este componente para la libreria -->

                <?php foreach($eventos['conferencias_v'] as $evento) { ?>
                    <?php include __DIR__ . "/../templates/conferencias.php" ;?>
                <?php }?>
            </div>
            
            <div class="swiper-button-prev"></div>  <!-- Botones del Slider  -->
            <div class="swiper-button-next"></div>
        </div>


        <div class="eventos__fecha">Sabado 15 de Marzo</div>

        <div class="eventos__listado slider swiper"> <!-- slider para selecioner con js y swiper para agrgar styles con la libreria -->
            <div class="swiper-wrapper"> <!-- Es nesesario agregar este componente para la libreria -->
                <?php foreach($eventos['conferencias_s'] as $evento) { ?>
                    <?php include __DIR__ . "/../templates/conferencias.php" ;?>
                <?php }?>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="eventos--workshop">
        <h3 class="eventos__heading">&lt; WorkShops /></h3>
        
        <div class="eventos__fecha">Viernes 14 de Marzo</div>
        <div class="eventos__listado slider swiper"> <!-- slider para selecioner con js y swiper para agrgar styles con la libreria -->
            <div class="swiper-wrapper"> <!-- Es nesesario agregar este componente para la libreria -->
                <?php foreach($eventos['workshops_v'] as $evento) { ?>
                    <?php include __DIR__ . "/../templates/conferencias.php" ;?>
                <?php }?>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="eventos__fecha">Sabado 15 de Marzo</div>
        <div class="eventos__listado slider swiper"> <!-- slider para selecioner con js y swiper para agrgar styles con la libreria -->
            <div class="swiper-wrapper"> <!-- Es nesesario agregar este componente para la libreria -->
                <?php foreach($eventos['workshops_s'] as $evento) { ?>
                    <?php include __DIR__ . "/../templates/conferencias.php" ;?>
                <?php }?>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</main>