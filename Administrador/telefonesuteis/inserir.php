<?php include_once '../header.php'; ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Inserir Telefone Úteis</div>
      <div class="card-body">
        <form action="" name="telefone"  method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="nome" id="firstName" class="form-control" placeholder="Nome" required="required" autofocus="autofocus">
                  <label for="firstName">Nome</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" name="numero" id="lastName" class="form-control" placeholder="Numero" required="required">
                  <label for="lastName">Numero</label>
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
          <input type="submit" name="Cadastro" value="Cadastrar" class="btn btn-primary btn-block"> <input type="reset" value="Limpar" class="btn btn-primary btn-block">
          <!--<a class="btn btn-primary btn-block" href="login.html">Registrar</a>-->
        </form>
      </div>
    </div>
  </div>

  <?php
include_once 'funcoes.class.php';
include_once 'dadostelefonesuteis.php';
if (isset($_POST['Cadastro'])) {
    $telefonesuteis = new DadosTelefonesUteis();
    $telefonesuteis->setNome($_POST['nome']);
    $telefonesuteis->setNumero($_POST['numero']);
    $funcoes = new FuncoesTelefonesUteis();
    $funcoes->inserir($telefonesuteis);

    if($funcoes){
         echo "<b>Telefone cadastrado com sucesso</b>";
    }else{
      
      echo "<b>Erro ao cadastrar telefone</b>";
    }
  }
?>
  <?php
  include_once '../footer.php';
  ?>