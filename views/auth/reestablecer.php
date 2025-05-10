<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__texto">Restablece tu contraseña en DevWebCamp</p>

    <?php include_once __DIR__ . '/../templates/alertas.php'?>

    <?php if($token_valido) {?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="passsword" class="formulario__label">Password</label>
                <input 
                    class="formulario__input"
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Tu Password"
                >
            </div>

            <div class="formulario__campo">
                <label for="passsword2" class="formulario__label">Confirma tu Password</label>
                <input 
                    class="formulario__input"
                    type="password"
                    id="password2"
                    name="password2"
                    placeholder="Repite tu Password"
                >
            </div>

            <input type="submit" class="formulario__submit" value="Guardar Password">
        </form>
    <?php }?>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Inicia Sesion Aquí</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obten una aquí</a>
    </div>


</main>