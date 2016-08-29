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
                <div class="contenido">
                    <p>ICT Engineer | </p>
                    <ul>
                        <li>Web Developer</li>
                        <li>PHP</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JS</li>
                    </ul>                
                    <p> | Geek | Fan of Open Source. </p>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading text-right">
                              <button class="btn btn-primary animated pulse" id="downcurriculum"><span class="glyphicon glyphicon-cloud-download"></span> Currículum</button>
                          </div>
                          <div class="panel-body">
                            <figure class="center-block">
                                <img src="img/JuanKarloz.jpg" alt="@Juan Karloz" class="img-responsive">
                            </figure>
                            <h5 class="panel-title text-center"><strong>Juan Carlos Zárate Moguel</strong></h5>
                            <br>
                            <p class="text-justify">Ingeniero en Tecnologías de la Información y Comunicación,
                            egresado de la Universidad Tecnológica de Puebla (2011-2015).</p>
                            <p class="text-justify frase">"La tecnología debería hacernos la vida mas fácil, pero cuando de veras la necesitas, no funciona."</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-justify">
                            Saludos gente...
                            <br>
                            <br>
                            ¿Quién soy yo?
                            <br>
                            <br>
                            Pues soy un chaval que gusta del <strong>Desarrollo Web</strong>, <strong>Programación web</strong>, <strong>Back end</strong>,
                            <strong>Front end</strong>, <strong>Redes</strong> y soporte técncio en pocas palabras un todologo, ¿Porqué? pues simplemente
                            soy un apasionado de las TIC's.
                        </p>
                        <p class="text-justify">
                            Desde la edad de 18 años, años más años menos, me llamo la atención las maravillas que se pueden hacer con los ordenadores,
                            el internet, las redes y en la actualidad eso que llaman el internet de las cosas todo esto dio como resultado el querer
                            estudiar una carrera informatica. 
                        </p>
                        <p>
                            Me gusta estar en constante aprendizaje ya sea a través de cursos o de manera autodidacta.
                        </p>
                        <p>En mis ratos de oscio gusto por leer, escuchar música, ver películas o hacer ejercicio.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="app-seccion">
            <div class="container">
                <div class="row" id="muestraSeisTrabajos">                    
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

        <!--pie de pagina-->
        <?php include_Once 'librerias/pie.php'; ?>