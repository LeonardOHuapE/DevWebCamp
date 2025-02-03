<h2 class="dashboard__heading"><?php echo $titulo?></h2>

<div class="dashboard__contenedor-boton">
    <a href="/admin/ponentes/crear" class="dashboard__boton">
        <i class="fa-solid fa-circle-plus"></i>
        Crear Ponente
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if(!empty($ponentes)) { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">ubicacion</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($ponentes as $ponente) {?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $ponente->nombre . " " . $ponente->apellido;?>
                        </td>

                        <td class="table__td">
                            <?php echo $ponente->ciudad . ", " . $ponente->pais;?>
                        </td>

                        <td class="table__td--opciones">
                            <a href="/admin/ponentes/editar?id=<?php echo $ponente->id; ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>

                            <form class="table__formulario">
                                <button type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    <?php } else {?>
        <p class="text-center">No hay Ponentes registrados</p>
    <?php }?>
</div>