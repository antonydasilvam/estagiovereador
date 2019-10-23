<?php include_once '../header.php';
  
?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Ver Noticia</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="Nome Completo" required="required" autofocus="autofocus">
                  <label for="firstName">Setembro Amarelo</label>
                </div>
              </div>
              <div class="col-md-6">
        
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="inputServico" class="form-control" required="required">
              <option for="inputServico">Nenhum</option>
              <option for="inputServico">Causa Animal</option>
              <option for="inputServico">Comunidade</option>
              <option for="inputServico">Educação</option>
              <option for="inputServico">Saude</option>
              <option for="inputServico">Seleccione Serviço</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="foto" class="form-control" required="required">
              <label for="foto">Foto</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
            <textarea id="descricao" class="form-control" rows="15" data-rule="required" data-msg="Please write something for us" placeholder="Descrição" >Descripcion de prueba sobre la noticia</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Editar</a>
        </form>
      </div>
    </div>
  </div>
        <?php
include_once '../footer.php';
?>
