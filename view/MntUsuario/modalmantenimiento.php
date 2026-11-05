<div id="modalmantenimiento" class="modal fade" tabindex="-1" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0">
        
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nuevo Registro</h6>
                
            </div>
            
            <form action="" method="POST" id="usuario_form">

                <div class="modal-body pd-25">
                    <input type="hidden" name="pro_id" id="pro_id">
                    <div class="form-group d-flex align-items-center justify-content-between">
                    <label for="pro_nom" class="form-control-label me-2">Nombre: </label>
                    <input type="text" class="form-control me-2" id="us_nom" name="us_nom" placeholder="Ingrese el nombre" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center justify-content-between">
                    <label for="pro_ape" class="form-control-label me-2">Apellido: </label>
                    <input type="text" class="form-control me-2" id="us_ape" name="us_ape" placeholder="Ingrese el apellido" required>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between">
                    <label for="pro_ape" class="form-control-label me-2">Usuario: </label>
                    <input type="text" class="form-control me-2" id="us_usuario" name="us_usuario" placeholder="Ingrese el usuario" required>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between">
                    <label for="pro_ape" class="form-control-label me-2">Contraseña: </label>
                    <input type="text" class="form-control me-2" id="us_contra" name="us_contra" placeholder="Ingrese la contraseña" required>
                    </div>
                </div>
            
            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Guardar</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
                </div>
           
            </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->