<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__descripcion">Registrate en DevWebCamp</p>

    <form class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre" 
                class="formulario__input" 
                placeholder="Tu Nombre"/>
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input 
                type="text" 
                id="apellido" 
                name="apellido" 
                class="formulario__input" 
                placeholder="Tu Apellido"/>
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="formulario__input" 
                placeholder="Tu Correo"/>
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                class="formulario__input" 
                placeholder="Tu password"/>
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repite tu Password</label>
            <input 
                type="password" 
                id="password2" 
                name="password2" 
                class="formulario__input" 
                placeholder="Confirma tu password"/>
        </div>

        <input type="submit" value="Crear Cuenta" class="formulario__submit"> 
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesión aquí</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>

</main>