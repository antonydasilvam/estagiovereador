<?php include_once '../header.php'; ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Modificar Conta 
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="email" class="form-control" placeholder="Email" required="required" autofocus="autofocus">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="senha" class="form-control" placeholder="Senha" required="required">
                  <label for="senha">Senha</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="cemail" class="form-control" placeholder="Confirmar Email" required="required" autofocus="autofocus">
                  <label for="cemail">Confirmar Email</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="csenha" class="form-control" placeholder="Confirmar Senha" required="required">
                  <label for="csenha">Confirmar Senha</label>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            
          </div>
          <div class="form-group">
            
          </div>
          <div class="form-group">
            <div class="form-row">              
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Modificar Conta</a>
        </form>
      </div>
    </div>
  </div>


  <?php
include_once '../footer.php';
?>
