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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KarlozWeb | AboutMe</title>

        <!-- Hoja de Estilos -->
        <?php include_Once 'include/hojaestilo.php'; ?>
    </head>
    <body>
        <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Menú-->
        <?php include_Once 'include/encabezado.php'; ?>        

        <!-- Botón ir arriba -->
        <?php include_Once 'include/botonarriba.php'; ?>

        <!--Contenido-->
        
        <!-- Entrada -->
        <section class="app-aboutme">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="animacion">
                            <p id="f1">Computación</p>
                        </div>
                        <div class="animacion">
                            <p id="f2">Karate-Do</p>
                        </div>
                        <div class="animacion">
                            <p id="f3">Lectura</p>
                        </div>
                        <div class="animacion">
                            <p id="f4">Música</p>
                        </div>
                    </div>                  
                </div>
            </div>
        </section>

        <!-- Acerca de mi -->
        <section class="infopersona">
            <div class="container">
                <div class="row">
                    <div class="col xs-12 text-center">
                        <h2 class="text-uppercase">Acerca de mi</h2>
                        <hr class="colored">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 text-center">
                        <div>
                            <div class="img"></div>
                            <img src="img/karloz.jpg" alt="karloz" class="img-responsive">
                            <!-- <button class="btn btn-info" id="downcurriculum"><span class="glyphicon glyphicon-cloud-download"></span> Hoja de vida</button> -->                            
                            <div class="caption">
                                <h3 class="text-capitalize">juan carlos zárate moguel</h3>
                                <hr class="colored">
                                <p>Ing. en TIC's</p>
                                <ul class="list-inline social">
                                    <li><a href="https://www.facebook.com/jouet.casse" target="-blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                                    <li><a href="https://twitter.com/Juan_KarloZ" target="-blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                                    <li><a href="https://mx.linkedin.com/in/karlozarate" target="-blank"><i class="fa fa-linkedin fa-fw"></i></a></li>
                                    <li><a href="https://github.com/xharly" target="-blank"><i class="fa fa-github fa-fw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-justify">
                        <p>Saludos!!</p>
                        <p>Mi nombre es Juan Carlos, soy un fiel apasionado de todo aquello que tenga que ver con los ordenadores, la tecnología, es por ello que me gusta estar informado a través de redes sociales, blogs, foros, revistas para estar en constante capacitación de manera autodidacta.</p>
                        <p>Titulado como Ingeniero en Tecnologías de la Información y Comunicaciones (TIC's) en la Univesidad Tecnológica de Puebla (2011-2016), tecnología en la cual desde los 16 años me empezo a gustar y me desempeñaba bastante bien.</p>
                        <p>Vivo en la ciudad de Puebla - me gusta escuchar música (Hip-Hop, RandB, Rap) a todas horas y en todo momento, no soy un apacionado a la lectura, pero si un libro me atrapa, no lo dejo hasta acabarlo, soy de las personas que les gusta ver películas en sus ratos de oscio, soy un fan de las películas de acción, futuristas,
                        pero no me pasan nada las películas cursis.</p>                        
                        <p>¿Deporte? claro que si, las artes marciales son mi mero mole, actualmente soy cinta morada (8° kyu).</p>
                    </div>
                </div>

                <hr>
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-4">
                        <p>Último Libro</p>
                        <figure>
                            <img src="img/libros/libro.jpg" alt="Matar a un ruiseñor" class="img-responsive">
                        </figure>                        
                        <p>Matar a un ruiseñor</p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <p>Último Disco</p>
                        <figure>
                            <img src="img/musica/disco.jpg" alt="Ahora" class="img-responsive">
                        </figure>
                        <p>Ahora</p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <p>Última Película</p>
                        <figure>
                            <img src="img/peliculas/pelicula.jpg" alt="Tortugas ninja 2" class="img-responsive">
                        </figure>
                        <p>Tortugas ninja 2</p>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <!-- Habilidades -->
        <section class="habilidades">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center text-uppercase">
                        <h2>Habilidades</h2>
                        <hr class="colored">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-4">
                        <div id="progressBarRedes">
                            <strong></strong>
                            <h4>Redes</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div id="progressBarDesarrollo">
                            <strong></strong>
                            <h4>Desarrollo</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div id="progressBarDiseño">
                            <strong></strong>
                            <h4>Diseño</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item titulo-lista"><h2>BackEnd</h2></li>
                            <li class="list-group-item">
                                PHP
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                MySQL
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                Node.js
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                .NET (C#)
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item titulo-lista"><h2>FrontEnd</h2></li>
                            <li class="list-group-item">
                                HTML 5
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                CSS3
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                JavaScript
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                jQuery
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                Bootstrap
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                        </ul>
                    </div> 
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item titulo-lista"><h2>Sistemas Operativos</h2></li>
                            <li class="list-group-item">
                                Windows XP <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                Windows Seven <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                Windows 8 <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                Linux (Ubuntu) <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                MAC OS <span class="pull-right glyphicon glyphicon-remove"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item titulo-lista"><h2>Redes</h2></li>
                            <li class="list-group-item">
                                CCENT
                                <span class="pull-right glyphicon glyphicon-remove"></span>
                            </li>
                            <li class="list-group-item">
                                CCNA
                                <span class="pull-right glyphicon glyphicon-ok"></span>
                            </li>
                            <li class="list-group-item">
                                CCNP
                                <span class="pull-right glyphicon glyphicon-remove"></span>
                            </li>
                            <li class="list-group-item">
                                CCIE
                                <span class="pull-right glyphicon glyphicon-remove"></span>
                            </li>
                        </ul>
                    </div> 
                </div>
            </div>          
        </section>

        <!-- Pie de Página -->
        <?php include_Once 'include/pie.php'; ?>

        <!-- Scritps JS -->
        <?php include_Once 'include/javascript.php'; ?>

        <!-- Circulos de progreso -->
        <script src="js/vendor/circle-progress.min.js"></script>

        <script>
            $(document).ready(function(){
                var sizeCircle = 150;
                var startAngleCircle = 300;
                $('#progressBarRedes').circleProgress({
                    value: .80,
                    size: sizeCircle,
                    startAngle: startAngleCircle,
                    fill: '#8C1C25',
                }).on('circle-animation-progress', function(event, progress) {
                      $(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
                    });
                $('#progressBarDesarrollo').circleProgress({
                    value: .50,
                    size: sizeCircle,
                    startAngle: startAngleCircle,
                    fill: '#191726',
                }).on('circle-animation-progress', function(event, progress) {
                      $(this).find('strong').html(parseInt(50 * progress) + '<i>%</i>');
                    });
                $('#progressBarDiseño').circleProgress({
                    value: .60,
                    size: sizeCircle,
                    startAngle: startAngleCircle,
                    fill: '#2E62A6',
                }).on('circle-animation-progress', function(event, progress) {
                      $(this).find('strong').html(parseInt(60 * progress) + '<i>%</i>');
                    });
            })
        </script>
    </body>
</html>    