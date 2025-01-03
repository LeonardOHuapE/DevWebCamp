<main class="auth">
    <h2 class="auth__titulo">DevWebCamp</h2>
    <p class="auth__descripcion"> Inicia Session o crea una cuenta</p>

    <form class="formulario">
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
        <input type="submit" value="Iniciar Sesión" class="formulario__submit"> 
    </form>

    <div class="acciones">
        <a href="/crear" class="acciones__enlace">¿Aún no tienes una cuenta? Obten una aquí</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>

</main>