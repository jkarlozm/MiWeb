    <!--Cabecera Administrador-->
    <?php include_once("../librerias/cabeceraAdmin.php") ?>

        <!--Contenido sección-->
        <section id="contenido">
            <div class="container">

                <!--Alertas-->
                <div class="row" id="mensajeTrabajoManger"></div>

                <!--Botón agregar nuevo trabajo-->
                <div class="row text-right">
                    <button class="btn btn-success" id="modalRegistrar"><span class="glyphicon glyphicon-floppy-save"></span> Nuevo Trabajo</button>
                </div>

                <!--Mostramos trabajos-->
                <div class="row" id="muestraTrabajosManager">                    
                </div>

                <!-- Paginado -->
                <div class="row text-center">
                    <ul class="pagination" id="paginadoManager"></ul>
                </div>
            </div>
        </section>        

        <!--Ventana modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">                            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Agregar Nuevo Trabajo</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" id="mensajeSubirTrabajo"></div>
                    </div>
                    <form id="subirTrabajo">
                        <input type="hidden" id="idtrabajo">
                        <div class="form-group">
                            <input type="text" id="title" name="title" placeholder="Título" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea rows="3" id="description" name="description" placeholder="Descripción" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="githubUrl" name="githubUrl" placeholder="GitHub" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" id="url" name="url" placeholder="URL" class="form-control">
                        </div>
                        <hr>
                        <button type="submit" id="savework" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Guardar</button>
                        <button type="button" id="updatework" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Actualizar</button>
                        <button type="button" id="cancelwork" class="btn btn-primary"> Cancelar</button>
                    </form>
                </div>                
            </div>
          </div>
        </div>
    
    <!--Pie Adminsitrador-->
    <?php include_once("../librerias/pieAdministrador.php") ?>
    <script src="../js/ckeditor/ckeditor.js"></script>
    <script src="../js/ckeditor/adapters/jquery.js"></script>

    <script>
        $(document).ready(function(){
            $('#description').ckeditor();            
        });
    </script>
    