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
        ></textarea>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Categoria del Evento</label>
        <select name="categoria_id" id="categoria" class="formulario__select">
            <option value="">-- Seleccionar --</option>
            <?php foreach($categorias as $categoria) {?>
                <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre?></option>
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
    </div>

    <div id="horas" class="formulario__campo">
        <label for="hora" class="formulario__label">Seleccionar Hora del Evento</label>
        
        <ul class="horas">
            <?php foreach ($horas as $hora){?>
                <li class="horas__hora"><?php echo $hora->hora?></li>
            <?php }?>
        </ul>
    </div>
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
        <label class="formulario__label" for="lugares">Lugares disponibles</label>
        <input
            type="number"
            min="1"
            id="lugares"
            name="lugares"
            placeholder="Ejemp: 20"
            class="formulario__input"
        >
    </div>
</fieldset>