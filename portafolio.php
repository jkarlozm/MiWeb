<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>KarlozWeb | Portafolio</title>

        <!-- Hojas de estilo -->
        <?php include_Once 'include/hojaestilo.php'; ?>
    </head>
    <body>
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