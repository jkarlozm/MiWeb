<?php 
    //Cabecera de pag.
    include ('librerias/cabecera.php');
?>
    <!--Contenido-->
    <section class="app-comunicate">
        <div class="container">
            <div class="row" id="alertaCorreo">                
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <!--Formulario comunicate-->
                    <p>Escríbeme</p>
                    <p class="text-justify">Cuentame de tu proyecto, dudas, sugerencias ó simplemente
                    me quieres ofrecer un sueldo millonario, aquí esta el medio.</p>
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title text-center">Contacto</h3>
                      </div>
                      <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" maxlength="30" class="form-control" placeholder="Nombre" id="nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                    <input type="email" class="form-control" placeholder="Correo" id="correo">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                    <input type="tel" maxlength="10" class="form-control" placeholder="Teléfono" id="telefono">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows="3" class="form-control" placeholder="Escribe tu mensaje aquí..." id="mensajecorreo"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="button" id="enviarCorreo" class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                            </div>
                        </form>
                      </div>
                    </div>                       
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 datos-contacto">
                    <p>Información de Contacto</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Puebla, México</p>
                    <p><span class="glyphicon glyphicon-phone"></span> 044-22.23.39.04.74</p>
                    <p><span class="glyphicon glyphicon-comment"></span> jkarloz2903@gmail.com</p>
                    <figure>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7543.167271673289!2d-98.14024977380375!3d19.038060236535028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc02391be945d%3A0x930be2adb4f61c4c!2sEl+Salvador%2C+Her%C3%B3ica+Puebla+de+Zaragoza%2C+Pue.!5e0!3m2!1ses!2smx!4v1442935154159" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>
        </div>
    </section>        

    <!--Pie de pagina-->        
    <?php include ('librerias/pie.php'); ?>