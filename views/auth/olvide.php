<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__descripcion">Recupera tu contraseña de DevWebCamp</p>

    <?php include_once __DIR__ . '/../templates/alertas.php'?>

    <form class="formulario" method="POST" action="/olvide">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Correo</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="formulario__input" 
                placeholder="Tu Correo"/>
        </div>

        <input type="submit" value="Iniciar Sesión" class="formulario__submit"> 
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesion Aquí</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obten una aquí</a>
    </div>

</main>