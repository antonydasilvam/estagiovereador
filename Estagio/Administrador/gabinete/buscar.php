<?php include_once '../header.php'; ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Buscar Integrante    
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="Nome Completo" required="required" autofocus="autofocus">
                  <label for="firstName">Nome</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Cargo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="foto" class="form-control" required="required">
              <label for="foto">Foto</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">              
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="editar.php">Registrar</a>
        </form>
      </div>
    </div>
  </div>


  <?php
include_once '../footer.php';
?>
