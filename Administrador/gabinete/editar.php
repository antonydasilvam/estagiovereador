<?php include_once '../header.php';

  include_once 'funcoes.class.php';
  include_once 'dadosgabinete.php';
  
  $funcoes = new Funcoes();


$dadosgabinete = new DadosGabinete();
$dadosgabinete->setId($_GET['ID']);
$retorno = $funcoes->listarUnico($dadosgabinete);
foreach($retorno as $linha ){
?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Editar Integrante      
      </div>
      <div class="card-body">
        <form action="" name="gabinete"  method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name='nome' value='<?php echo $linha['nome']?>' class="form-control" placeholder="Nome Completo" required="required" autofocus="autofocus">
                  <label for="firstName">Nome</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name='cargo' value='<?php echo $linha['cargo']?>' class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Cargo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="foto" class="form-control" required="required"><br>
              <img src="img/<?php echo $linha['foto']; ?>" height="100" width="100" onclick='window.open(this.src)'>
              <label for="foto">Foto</label>
            </div>
            <label>Imagem Antiga</label>
          </div>
          <div class="form-group">
            <div class="form-row">              
            </div>
          </div>
          <!--<a class="btn btn-primary btn-block" href="">Registrar</a>-->
          <input type="submit" name="Cadastro" value="Cadastrar" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>
  </div>


  <?php
}
include_once '../footer.php';

if (isset($_POST['Cadastro'])) {
  $gabinete = new DadosGabinete();
  $gabinete->setNome($_POST['nome']);
  $gabinete->setCargo($_POST['cargo']);

  $nombreimg=$_FILES['foto']['name'];
  $nombreTemporario = $_FILES['foto']['tmp_name'];
  $destino = 'img/'.$nombreimg;
  //move_uploaded_file($nombreTemporario, $destino)
  if (move_uploaded_file($nombreTemporario,$destino))
  {
      echo "<center>foto enviada con exito</center>";
  }
  else{
      "<center>Error al insertar foto</center>";
  }

  $gabinete->foto = $nombreimg;

  
  $funcoes = new Funcoes();
  $funcoes->editar($gabinete);

  if($funcoes){
       echo "<b>Pessoa cadastrado com sucesso</b>";
  }else{
    
    echo "<b>Erro ao cadastrar pessoa</b>";
  }
}



?>
