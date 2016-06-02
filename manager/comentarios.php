    <!--Cabecera Admnistrador-->
    <?php include_once("../librerias/cabeceraAdmin.php") ?>
        
        <!--Mustra Comentarios-->
        <section id="contenido">
            <div class="container">
                <div class="row" id="alertaComentariosManager"></div>
                <div class="list-group" id="muestraComentarioManager">                    
                </div>
            </div>            
        </section>        

        <!-- Ventana Modal para responser comentarios -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Responder comentario: </h4>
              </div>
              <div class="modal-body">
                <form>
                    <input type="hidden" id="txtid_c" value="0">
                    <div class="form-group">
                        <textarea id="txtrespcom" rows="3" class="form-control"></textarea>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnrespcom">Responder</button>
              </div>
            </div>
          </div>
        </div>

    <!--Pie Adminsitrador-->
    <?php include_once("../librerias/pieAdministrador.php") ?>