<?php include_once '../header.php';
  include_once "funcoes.class.php";
  include_once 'dadosgabinete.php';

  $funcoes = new Funcoes();
  $listar = $funcoes->listar();
  
?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Listar Gabinete</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Foto</th>
                    <th>Editar Pessoa</th>
                    <th>Eliminar Pessoa</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Foto</th>
                    <th>Editar Pessoa</th>
                    <th>Eliminar Pessoa</th>
                  </tr>
                </tfoot>
               <!-- Hacer un for de aca --> <tbody>
            <?php
            foreach ($listar as $linha) {
                ?>
                  <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['cargo']; ?></td>
                    <td><img src="img/<?php echo $linha['foto']; ?>" height="100" width="75" onclick='window.open(this.src)'></td>
                    <td><a href="editar.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="excluir.php?ID=<?php echo $linha['id']; ?>"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr><?php }; ?>
                  
                </tbody> <!-- Hasta aca -->
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Última atualização 24/10/2019</div>
        </div>

        <?php
        
include_once '../footer.php';
?>
