<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Personal</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
            type="text"
            name="nombre"
            id="nombre"
            placeholder="Nombre Ponente"
            class="formulario__input"
            value="<?php echo $ponente->nombre ?? ''?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input
            type="text"
            name="apellido"
            id="apellido"
            placeholder="Apellido Ponente"
            class="formulario__input"
            value="<?php echo $ponente->apellido ?? ''?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input
            type="text"
            name="ciudad"
            id="ciudad"
            placeholder="Ciudad Ponente"
            class="formulario__input"
            value="<?php echo $ponente->ciudad ?? ''?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">País</label>
        <input
            type="text"
            name="pais"
            id="pais"
            placeholder="Pais Ponente"
            class="formulario__input"
            value="<?php echo $ponente->pais ?? ''?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen</label>
        <input
            type="file"
            name="imagen"
            id="imagen"
            class="formulario__input--file"
        >
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Extra</legend>
    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Aréas de Experiencia (Separadas por una coma)</label>
        <input
            type="text"
            name="tags_input"
            id="tags_input"
            placeholder="Ejem, Node.js, PHP, Laravel, React, Javascript"
            class="formulario__input"
        >

        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" name="tags" id="tags_hidden">
    </div>
</fieldset>
<!-- Redes Sociales -->
<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Redes Sociales</legend>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input
                type="text"
                name="redes[facebook]"
                placeholder="Facebook URL"
                class="formulario__input--sociales"
                value="<?php echo $ponente->redes['facebook'] ?? ''?>"
            >
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input
                type="text"
                name="redes[twitter]"
                placeholder="Twitter URL"
                class="formulario__input--sociales"
                value="<?php echo $ponente->redes['twitter'] ?? ''?>"
            >
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input
                type="text"
                name="redes[youtube]"
                placeholder="Youtube URL"
                class="formulario__input--sociales"
                value="<?php echo $ponente->redes['youtube'] ?? ''?>"
            >
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input
                type="text"
                name="redes[instagram]"
                placeholder="Instagram URL"
                class="formulario__input--sociales"
                value="<?php echo $ponente->redes['instagram'] ?? ''?>"
            >
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input
                type="text"
                name="redes[tiktok]"
                placeholder="Tiktok URL"
                class="formulario__input--sociales"
                value="<?php echo $ponente->redes['tiktok'] ?? ''?>"
            >
        </div>
    </div>

    <div class="formulario__campo">
        <div class="formulario__contenedor-icono">
            <div class="formulario__icono">
                <i class="fa-brands fa-github"></i>
            </div>
            <input
                type="text"
                name="redes[github]"
                placeholder="Github URL"
                class="formulario__input--sociales"
                value="<?php echo $ponente->redes['github'] ?? ''?>"
            >
        </div>
    </div>

</fieldset>