<?php include_once '../header.php';

    
  include_once "funcoes.class.php";
  include_once 'dadosnoticias.php';


    $funcoesnoticias = new FuncoesNoticias();
    $listarnoticia = $funcoesnoticias->listarUnico($_GET['ID']);
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
                  <?php foreach ($listarnoticia as $linhanoticia){ ?>
                  <label for="firstName"><?php echo $linhanoticia['titulo']; ?></label>
                </div>
              </div>
              <div class="col-md-6">
        
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="inputServico" name="tiponoticia" class="form-control" required="required">
              <option for="inputServico" value='<?php echo $linhanoticia['tiponoticia']; ?>'><?php echo $linhanoticia['tiponoticia']; ?></option>
              <option for="inputServico"value='Causa Animal'>Causa Animal</option>
              <option for="inputServico"value='Comunidade'>Comunidade</option>
              <option for="inputServico"value='Educação'>Educação</option>
              <option for="inputServico"value='Saude'>Saude</option>
              <option for="inputServico"value='Nenhum'>Nenhum</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
            <textarea id="descricao" name="descricao" class="form-control" rows="15" data-rule="required" data-msg="Please write something for us" placeholder="Descrição" ><?php echo $linhanoticia['descricao']; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <?php } ?>
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
