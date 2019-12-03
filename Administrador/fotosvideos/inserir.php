<?php include_once '../header.php';
      include_once '../noticias/funcoes.class.php';
      include_once '../noticias/dadosnoticias.php';

$dadosnoticias = new FuncoesNoticias();
$listar = $dadosnoticias->listarlimit();


?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Inserir Imagens e Videos</div>
      <div class="card-body">
        <form action="" name="imagens"  method="POST"  enctype="multipart/form-data">
          
          <div class="form-group">
            <div class="form-label-group">
              <select id="inputServico" name="fknoticia" class="form-control" required="required">
              <option for="inputServico" value='0'>Seleccione Noticia</option>
              <?php foreach ($listar as $linha){ ?>
              <option for="inputServico"value='<?php echo $linha['id']; ?>'><?php echo $linha['titulo']; ?></option>
              <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="imagem" name="imagem" class="form-control" required="required" >
              <label for="imagem">Imagens</label>
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
          <input type="submit" name="Cadastro" value="Inserir Imagem/Video" class="btn btn-primary btn-block"> <input type="reset" value="Limpar" class="btn btn-primary btn-block">
          <!--<a class="btn btn-primary btn-block" href="login.html">Registrar</a>-->
        </form>
      </div>
    </div>
  </div>


 <?php
include_once 'funcoes.class.php';
include_once 'dadosimagens.php';

if (isset($_POST['Cadastro'])) {
  $dadosimagens = new DadosImagens();
  $dadosimagens->setFknoticia($_POST['fknoticia']);

    $nombreimg=$_FILES['imagem']['name'];
    $nombreTemporario = $_FILES['imagem']['tmp_name'];
    $destino = 'img/'.$nombreimg;
    //move_uploaded_file($nombreTemporario, $destino)
    if (move_uploaded_file($nombreTemporario,$destino))
    {
        echo "";
    }
    else{
        "<center>Erro ao insertar imagem</center>";
    }

    $dadosimagens->imagem = $nombreimg;

    
    $funcoes = new FuncoesImagens();
    $funcoes->inserir($dadosimagens);

    if($funcoes){
         echo "<b>Imagem cadastrada com sucesso</b>";
    }else{
      
      echo "<b>Erro ao cadastrar Imagem</b>";
    }
  }
?>
  <?php
  include_once '../footer.php';
  ?>
