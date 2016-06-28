<?php 
    //Cabecera de pag.
    include ('librerias/cabecera.php');
?>
    <!--Contenido-->
    <section class="app-comunicate">
        <div class="container">
            <div class="row" id="mensajeAlerta">
            </div>
            <div class="row form-group">
                <h3 class="text-center">Escríbeme</h3>
                <p class="text-center">Cuentame de tu proyecto, dudas, sugerencias ó simplemente
                    me quieres ofrecer un sueldo millonario, aquí esta el medio.</p>
            </div>
            <!-- Formulario de contacto -->
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h4 class="panel-title text-center">Contacto</h4>
                      </div>
                      <div class="panel-body">
                        <form id="formContacto">
                            <div class="form-group form-group-lg input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" maxlength="30" class="form-control" placeholder="Nombre*" id="nombre">
                            </div>
                            <div class="form-group form-group-lg input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                    <input type="email" class="form-control" placeholder="Correo*" id="correo">
                            </div>
                            <div class="form-group form-group-lg input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                    <input type="tel" maxlength="10" class="form-control" placeholder="Teléfono" id="telefono">
                            </div>
                            <div class="form-group form-group-lg input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                                    <input type="text" class="form-control" placeholder="Página web" id="siteweb">
                            </div>
                            <div class="form-group form-group-lg">
                                <textarea rows="3" class="form-control" placeholder="Escribe tu mensaje aquí...*" id="mensajecorreo"></textarea>
                            </div>
                            <div class="form-group input-group form-group-lg">
                                <span class="input-group-addon">                                  
                                    <img src="librerias/imagen.php" alt="captcha">
                                </span>
                                <input type="text" class="form-control" placeholder="Código captcha*" id="codigoCaptcha" maxlength="5">
                            </div>
                            <div class="form-group">
                                <button type="button" id="enviarCorreo" class="col-xs-12 col-md-3 col-md-offset-9 btn btn-success btn-lg"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                            </div>
                        </form>
                      </div>
                    </div>                       
                </div>
                <!-- Datos de contacto -->
                <div class="col-xs-12 col-sm-5 col-md-5 datosContacto">
                    <div class="well">
                        <div class="media">
                            <div class="media-left">
                                <i class="glyphicon glyphicon-send"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Escribeme</h4>
                                <p>jkarloz2903@gmail.com</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="well">
                        <div class="media">
                            <div class="media-left">
                                <i class="glyphicon glyphicon-phone"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Llamame</h4>
                                <p>044-22.28.14.32.77</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="well">
                        <div class="media">
                            <div class="media-left">
                                <i class="glyphicon glyphicon-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Ubicación</h4>
                                <p>Puebla, Pue. / México</p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Ubicación mapa -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7543.167271673289!2d-98.14024977380375!3d19.038060236535028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc02391be945d%3A0x930be2adb4f61c4c!2sEl+Salvador%2C+Her%C3%B3ica+Puebla+de+Zaragoza%2C+Pue.!5e0!3m2!1ses!2smx!4v1442935154159" width="600" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>                    
                </div>
            </div>
        </div>
    </section>        

    <!--Pie de pagina-->        
    <?php include ('librerias/pie.php'); ?>