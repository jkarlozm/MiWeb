<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <!-- Meta Etiquetas -->
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="title" content="Karloz Web | Portafolio">
        <meta name="description" content="Bienvenido a Karloz Web donde podras encontrar mi portafolio como desarrollador backend, desarrollador frontend, programador web.">
        <meta name="author" content="Ing. Juan Carlos Zárate Moguel">
        <meta name="copyright" content="karlozweb.esy.es">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <title>Karloz Web | Portafolio</title>

        <!-- Hoja de Estilos -->
        <?php include_Once 'include/hojaestilo.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Botón ir arriba -->
        <?php include_Once 'include/botonarriba.php'; ?>

        <!--Menú-->
        <nav class="navbar" id="menu1">                
        </nav> <!--/menú-->
        
        <header class="index">
            <div class="overlay"></div>
            <div class="entrada">
                <span class="glyphicon glyphicon-globe animated bounceInRight"></span>
                <h1 class="animated bounceInLeft">Karloz Web</h1>
                <hr>
                <div class="contenido center-block">
                    <p class="hidden-xs">ICT Engineer | </p>
                    <ul>
                        <li>Web Developer</li>
                        <li>PHP</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JS</li>
                    </ul>                
                    <p class="hidden-xs"> | Geek | Fan of Open Source. </p>
                </div>
            </div>

            <!-- Icono flecha -->
            <div class="icon">
                <a href="#index2" id="flecha">
                    <span class="fa fa-chevron-circle-down animated infinite bounce"></span>
                </a>
            </div>
        </header>

        <section class="index" id="index2">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <h2 class="text-capitalize">i love what i do </h2>
                        <hr class="colored">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="aboutContent">
                            <i class="glyphicon glyphicon-console"></i>
                            <h3>Programación</h3>
                            <p>Desarrollo de aplicaciones web y de escritorio.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="aboutContent">
                            <i class="glyphicon glyphicon-globe"></i>
                            <h3>Redes</h3>
                            <p>Certificación CCNA por parte de CISCO.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="aboutContent">
                            <i class="glyphicon glyphicon-wrench"></i>
                            <h3>Soporte Técnico</h3>
                            <p>Diagnosticar un fallo en el ordenar siempre representa un gran reto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="karloz">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2 text-center">
                        <img src="img/JuanKarloz.jpg" alt="Juan Karloz" class="img-responsive img-circle center-block">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, repellat deserunt consequuntur</h4>
                        <p class="text-uppercase">juan carlos zárate moguel</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="seisTrabajos">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-uppercase">portafolio</h2>
                        <hr class="colored">
                        <p>Aquí encontraras algunos trabajos en los que he trabajado.</p>  
                    </div>
                </div>                
                <div class="row" id="muestraSeisTrabajos">                    
                </div>
            </div>
        </section>

        <section class="datosCuriosos">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-12 text-uppercase">
                        <h1>datos curiosos</h1>
                        <hr class="colored">
                    </div>
                </div>
                <div class="row text-uppercase">
                    <div class="col-xs-12 col-sm-3">
                        <i class="fa fa-code"></i>
                        <h3 id="contadorCodigo">0</h3>
                        <span>lineas de código</span>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <i class="fa fa-headphones"></i>
                        <h3 id="contadorSong">0</h3>
                        <span>songs listen</span>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <i class="fa fa-coffee"></i>
                        <h3 id="contadorCafe">0</h3>
                        <span>tazas de café</span>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <i class="fa fa-clock-o"></i>
                        <h3 id="contadorHoras">0</h3>
                        <span>horas trabajadas</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Servicios</h2>
                    <br>
                    <div class="col-md-4">
                        <article class="contenedor">
                            <p class="glyphicon glyphicon-wrench"></p>
                            <h3>Soporte Técnico</h3>
                            <p>Un ordenador en buen estado, siempre funcionara al 100% y te ahorras corajes y maldiciones.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="contenedor">
                            <p class="glyphicon glyphicon-file"></p>
                            <h3>Maquetación de Páginas Web</h3>
                            <p>Todo negocio en la actualidad merece destacar en internet.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="contenedor">
                            <p class="glyphicon glyphicon-console"></p>
                            <h3>Aplicaciones Web</h3>
                            <p>En la actualidad todo negocio necesita de un sistema que le ayude a llevar el control de sus procesos.</p>
                        </article>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-md-4">
                        <article class="contenedor">
                            <p class="glyphicon glyphicon-signal"></p>
                            <h3>Redes</h3>
                            <p>Una conexión a internet segura, te ayuda a proteger tu información de intrusos y te brinda grandes beneficios.</p>
                        </article>
                    </div>
                    <div class="col-md-4">                        
                    </div>
                    <div class="col-md-4">                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Pie de página -->
        <?php include_Once 'include/pie.php'; ?>

        <!-- Scripts JavaScript -->
        <?php include_Once 'include/javascript.php'; ?>
        <script src="js/vendor/countUp.js"></script>
        <script>            
            var cCodigo = new CountUp("contadorCodigo", 0, 23567893);
            var cHoras = new CountUp("contadorHoras", 0, 126789);
            var cCafe = new CountUp("contadorCafe", 0, 1000);
            var cSongs = new CountUp("contadorSong", 0, 4000);
            cCodigo.start();
            cHoras.start();
            cCafe.start();
            cSongs.start();
        </script>

    </body>
</html>