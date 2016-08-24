<!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>KarlozWeb | Portafolio</title>

        <!-- Hojas de estilo -->
        <?php include_Once 'include/hojaestilo.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Menú -->
        <?php include_Once 'include/encabezado.php'; ?>

        <!-- Botón ir arriba -->
        <?php include_once 'include/botonarriba.php'; ?>

        <!--Contenido-->
        <section class="app-seccion imagen">
            <div class="container">                
                <div class="row" id="muestraTrabajosPortafolio">
                    
                </div>
                <div class="row text-center">
                    <ul class="pagination" id="paginado"></ul>
                </div>
            </div>
        </section>

        <!-- Pie de Página -->
        <?php include_Once 'include/pie.php'; ?>

        <!-- Scritps JS -->
        <?php include_Once 'include/javascript.php'; ?>
    </body>
</html>