<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion del Evento</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Nombre del Evento"
            class="formulario__input"
            value="<?php echo $evento->nombre ?>"
        >
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripcion</label>
        <textarea 
            name="descripcion"
            id="descripcion"
            class="formulario__input"
            placeholder="Descripcion del Evento"
            rows="8"
        ><?php echo $evento->descripcion ?></textarea>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoria del Evento</label>
        <select name="categoria_id" id="categoria" class="formulario__select">
            <option value="" selected disabled='true'>-- Seleccionar --</option>
            <?php foreach($categorias as $categoria) {?>
                <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected' : ''?> value="<?php echo $categoria->id?>"><?php echo $categoria->nombre?></option>
            <?php }?> 
        </select>
    </div>

    <div class="formulario__campo">
        <label class="formulario__label">Selecione el dia del Evento</label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) {?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre) ?>"><?php echo $dia->nombre?></label>
                    <input 
                        type="radio"
                        name="dia"
                        id="<?php echo strtolower($dia->nombre) ?>"
                        value="<?php echo $dia->id?>"
                    >
                </div>
            <?php }?>
        </div>
        <input type="hidden" name="dia_id" value="">
    </div>

    <div class="formulario__campo">
        <label for="hora" class="formulario__label">Seleccionar Hora del Evento</label>
        
        <ul id="horas" class="horas">
            <?php foreach ($horas as $hora){?>
                <li data-hora-id="<?php echo $hora->id?>" class="horas__hora horas__hora--deshabilitado"><?php echo $hora->hora?></li>
            <?php }?>
        </ul>
    </div>
    <input type="hidden" name="hora_id" value="">
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Extra</legend>
    
    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input 
            type="text"
            id="ponente"
            class="formulario__input"
            placeholder="Buscar Ponente"
        >
    </div>

    <div class="formulario__campo">
        <label class="formulario__label" for="disponibles">Lugares disponibles</label>
        <input
            type="number"
            min="1"
            id="disponibles"
            name="disponibles"
            placeholder="Ejemp: 20"
            class="formulario__input"
            value="<?php echo $evento->disponibles ?>"
        >
    </div>
</fieldset>