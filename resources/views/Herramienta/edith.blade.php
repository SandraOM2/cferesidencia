<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form>
    <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">ID:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
     
  <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Tipo:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
  </div>
    
  </div>
</form>
  <form>
    <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Marca:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
     </div>
  <div class="form-row">
    <div class="col">
      <label for="inputState">Estado:</label>
      <select id="inputState" class="form-control">
        <option selected>...</option>
        <option value="1">Buen Estado</option>
        <option value="2">Mal Estado</option>
        <option value="3">Faltante</option>
        <option value="4">Indispensable </option>
      </select>
    </div>
    
  </div>

   <div class="form-group">
    <label for="recipient-name" class="col-form-label">Obcervaciones:</label>
    
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


    
  
</form>


          
      </div>
      <div class="modal-footer">
        <label for="inputZip">Foto:</label>
        <a class="btn btn-outline-success" href="/camara" role="button"><i class="fas fa-camera"></i></a>
        <button type="reset" class="btn btn-secondary" value="Reset" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" value="Reset" data-dismiss="modal" style="background:#7AB416">Editar Registro</button>
      </div>
    </div>
  </div>
</div>