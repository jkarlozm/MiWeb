    <!--Cabecera Administrador-->
    <?php include_once("../librerias/cabeceraAdmin.php") ?>
        
        <div class="container" style="margin-top: 25px;">
            <div class="row">
                <!--Herramientas web-->
                <div class="col-xs-12 col-md-6">
                    <section>
                        <div class="panel panel-default">                            
                            <div class="panel-heading">
                                <h3 class="panel-title text-center text-capitalize">Herramientas web</h3>
                            </div>
                            <div id="mensajeHerramientas"></div>
                            <div class="panel-body">
                                <div class="form-group text-right">
                                    <span class="glyphicon glyphicon-collapse-down" id="muestraFormulario"></span>
                                </div>                                
                                <form style="display: none;" id="formHerramientas">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txt_nombreHerramienta" placeholder="Nombre Herramienta">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txt_iconoHerramienta" placeholder="Icnono">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" value="0" id="txt_idHerramientaWeb">
                                        <button class="btn btn-success" type="button" id="guardarHerramienta">Guardar</button>
                                        <button class="btn btn-info" type="button" id="actualizarHerramienta">Actualizar</button>
                                        <button class="btn btn-info" type="button" id="cancelarActualizacion">Cancelar</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                       <thead>
                                           <tr>
                                               <th class="text-capitalize text-center">#</th>
                                               <th class="text-capitalize text-center">nombre</th>
                                               <th class="text-capitalize text-center">icono</th>
                                               <th class="text-capitalize text-center">acción</th>
                                           </tr>
                                       </thead>
                                       <tbody id="muestraHerramientas"></tbody>
                                   </table>
                               </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!--Usuarios-->
                <div class="col-xs-12 col-md-6">
                    <section>
                        <div class="panel panel-success">                            
                            <div class="panel-heading">
                                <h3 class="panel-title text-center text-capitalize">usuarios</h3>
                            </div>
                            <div id="mensajeUsuarios"></div>
                            <div class="panel-body">
                                <div class="container-fluid">
                                        <div class="row text-right form-group">
                                            <button type="button" class="btn btn-primary" id="nuevoUsuario">Nuevo Usuario</button>
                                        </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                       <thead>
                                           <tr>
                                               <th class="text-capitalize text-center">#</th>
                                               <th class="text-capitalize text-center">nombre</th>
                                               <th class="text-capitalize text-center">usuario</th>
                                               <th class="text-capitalize text-center">acción</th>
                                           </tr>
                                       </thead>
                                       <tbody id="muestraUsuarios"></tbody>
                                   </table>
                               </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>            
            <div class="row">
                <!--Opciones Menú-->
                <div class="col-xs-12 col-md-6">
                    <section>
                        <div class="panel panel-default">                            
                            <div class="panel-heading">
                                <h3 class="panel-title text-center text-capitalize">Opciones Menú</h3>
                            </div>
                            <div id="mensajeOpciones" role="alert"></div>
                            <div class="panel-body">
                                <div class="form-group text-right">
                                    <span class="glyphicon glyphicon-collapse-down" id="muestraFormularioMenu"></span>
                                </div>                                
                                <form id="formMenu" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txtTitulo" placeholder="Titulo">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txtEnlace" placeholder="Enlace">
                                    </div>
                                    <div class="form-group">
                                        <select name="" id="txtPrevilegio" class="form-control">
                                            <option value="0">Seleccione un privilegio</option>
                                            <option value="1">web</option>
                                            <option value="2">administrador</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" value="0" id="txtIdOpciones">
                                        <button class="btn btn-success" type="button" id="registrarOpcionMenu">Guardar</button>
                                        <button class="btn btn-info" type="button" id="actualizarOpcionMenu">Actualizar</button>
                                        <button class="btn btn-info" type="button" id="cancelarOpcionMenu">Cancelar</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                       <thead>
                                           <tr>
                                               <th class="text-capitalize text-center">#</th>
                                               <th class="text-capitalize text-center">titulo</th>
                                               <th class="text-capitalize text-center">enlace</th>
                                               <th class="text-capitalize text-center">privilegio</th>
                                               <th class="text-capitalize text-center">acción</th>
                                           </tr>
                                       </thead>
                                       <tbody id="muestraOpcionesMenu"></tbody>
                                   </table>
                               </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center text-capitalize">Último Libro</h3>
                                </div>
                                <div id="mensajeOpciones" role="alert"></div>
                                <div class="panel-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="thumbnail">
                                          <img src="../img/libro.jpg" alt="libro" class="img-responsive">
                                          <div class="caption">
                                            <h3 class="text-center">Libro</h3>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center text-capitalize">Último Disco</h3>
                                </div>
                                <div id="mensajeOpciones" role="alert"></div>
                                <div class="panel-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="thumbnail">
                                          <img src="../img/disco.jpg" alt="disco" class="img-responsive">
                                          <div class="caption">
                                            <h3 class="text-center">Disco</h3>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center text-capitalize">Último Película</h3>
                                </div>
                                <div id="mensajeOpciones" role="alert"></div>
                                <div class="panel-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="thumbnail">
                                          <img src="../img/pelicula.jpg" alt="pelicula" class="img-responsive">
                                          <div class="caption">
                                            <h3 class="text-center">Película</h3>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ventana Modal para agregar usuarios -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
                    </div>
                    <div class="modal-body">
                        <div id="mensajeUsuarios2"></div>
                        <form>
                            <div class="form-group">
                                <input type="tetx" placeholder="Nombre Usuario" class="form-control" id="txt_NombreUsuario">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Nick Name" class="form-control" id="txt_NameUsuario">
                                </div>
                            <div class="form-group">
                                <input type="password" placeholder="Contraseña" class="form-control" id="txt_PasswordUsuario">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Repita Contraseña" class="form-control" id="txt_PasswordrUsuario">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="0" id="txt_idUsuario">                
                        <button type="button" class="btn btn-primary" id="resgistrarUsuario">Guardar</button>
                        <button type="button" class="btn btn-info" id="actualizarUsuario">Actualizar</button>
                        <button type="button" class="btn btn-info" id="actualizarContrasena">Actualizar Contraseña</button>
                    </div>
                </div>
            </div>
        </div>
    
    <!--Pie Adminsitrador-->
    <?php include_once("../librerias/pieAdministrador.php") ?>