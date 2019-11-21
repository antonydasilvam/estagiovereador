<?php include_once '../header.php'; ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Inserir Imagens</div>
      <div class="card-body">
        <form action="" name="noticias"  method="POST"  enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" name="titulo" placeholder="Nome Completo" required="required" autofocus="autofocus">
                  <label for="firstName">Titulo</label>
                </div>
              </div>
              <div class="col-md-6">
        
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="inputServico" name="tiponoticia" class="form-control" required="required">
              <option for="inputServico" value='0'>Seleccione Serviço</option>
              <option for="inputServico"value='1'>Causa Animal</option>
              <option for="inputServico"value='2'>Comunidade</option>
              <option for="inputServico"value='3'>Educação</option>
              <option for="inputServico"value='4'>Saude</option>
              <option for="inputServico"value='5'>Nenhum</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="portada" name="portada" class="form-control" required="required" >
              <label for="portada">Portada</label>
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
          <input type="submit" name="Cadastro" value="Cadastrar" class="btn btn-primary btn-block"> <input type="reset" value="Limpar" class="btn btn-primary btn-block">
          <!--<a class="btn btn-primary btn-block" href="login.html">Registrar</a>-->
        </form>
      </div>
    </div>
  </div>


 <?php
include_once 'funcoes.class.php';
include_once 'dadosimagens.php';

if (isset($_POST['Cadastro'])) {
  $dadosnoticias = new DadosNoticias();
  $dadosnoticias->setTitulo($_POST['titulo']);
  $dadosnoticias->setDescricao($_POST['descricao']);
  $dadosnoticias->setTiponoticia($_POST['tiponoticia']);
  $dadosnoticias->setDatant($_POST['datant']);

    $nombreimg=$_FILES['portada']['name'];
    $nombreTemporario = $_FILES['portada']['tmp_name'];
    $destino = 'portadas/'.$nombreimg;
    //move_uploaded_file($nombreTemporario, $destino)
    if (move_uploaded_file($nombreTemporario,$destino))
    {
        echo "<center>Portada enviada com sucesso</center>";
    }
    else{
        "<center>Erro ao insertar portada</center>";
    }

    $dadosnoticias->portada = $nombreimg;

    
    $funcoes = new FuncoesNoticias();
    $funcoes->inserir($dadosnoticias);

    if($funcoes){
         echo "<b>Noticia cadastrada com sucesso</b>";
    }else{
      
      echo "<b>Erro ao cadastrar noticia</b>";
    }
  }
?>
  <?php
  include_once '../footer.php';
  ?>




  <?php
  include_once '../footer.php';
  ?>