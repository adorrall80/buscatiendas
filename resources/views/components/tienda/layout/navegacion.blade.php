<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <!--<ul class="main-nav nav navbar-nav">
                <li class="active"><a href=".">Inicio</a></li>
                <li><a href="#">Mejores Tiendas</a></li>
                <li><a href="tiendas">Todas las Tiendas</a></li>
                <li><a href="informacion/Quienes-Somos">Quienes Somos</a></li>
                <li><a href=informacion/Contacto">Contacto</a></li>
                <li><a href="informacion/Como-Registrarse ">Como registrar tienda</a></li>
                <li><a href="informacion/precios">Precios</a></li>
            </ul>-->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="#">Mejores Tiendas</a></li>
                <li><a href="{{ url('tiendas') }}">Todas las Tiendas</a></li>
                <li><a href="{{ url('informacion/Quienes-Somos') }}">Quienes Somos</a></li>
                <li><a href="{{ url('informacion/Contacto') }}">Contacto</a></li>
                <li><a href="{{ url('informacion/Como-Registrarse') }}">Como registrar tienda</a></li>
                <li><a href="{{ url('informacion/precios') }}">Precios</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>