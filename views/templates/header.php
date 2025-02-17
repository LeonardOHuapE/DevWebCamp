<header class="header">
    <div class="header__contenedor">

        <div class="header__contenido">

        <nav class="header__navegacion">
            <a href="/login" class="header__enlace">Iniciar Sesión</a>
            <a href="/registro" class="header__enlace">Registro</a>
        </nav>

            <a href="/" >
                <h1 class="header__logo">
                    &#60;DevWebCamp />
                </h1>
            </a>
            <p class="header__texto">16 y 17 de Marzo del 2025</p>
            <p class="header__texto header__texto--modalidad">En linea - Presencial</p>

            <div>
                <a class="header__boton" href="/registro">Comprar Cupon</a>
            </div>
        </div>
    </div>
</header>

<div class="barra">
    <div class="barra__contenido">
        <a href="/">
            <h2 class="barra__logo">
                &#60;DevWebCamp />
            </h2>
        </a>
        <nav class="navegacion">
            <a href="/devwebcamp" class="navegacion__enlace <?php echo paginaActual("/devwebcamp") ? 'navegacion__enlace--activo' : ''?>">Eventos</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo paginaActual("/paquetes") ? 'navegacion__enlace--activo' : ''?>">Paquetes</a>
            <a href="/workshop-conferences" class="navegacion__enlace <?php echo paginaActual("/workshop-conferences") ? 'navegacion__enlace--activo' : ''?>">Workshop Conferences</a>
            <a href="/registro" class="navegacion__enlace <?php echo paginaActual("/registro") ? 'navegacion__enlace--activo' : ''?>">Registro</a>
        </nav>
    </div>
</div>