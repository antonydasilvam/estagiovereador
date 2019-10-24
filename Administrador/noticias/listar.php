<?php include_once '../header.php';
  include_once "funcoes.class.php";
  include_once 'dadosnoticias.php';

  $funcoes = new FuncoesNoticias();
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
                    <th>Titulo</th>
                    <th>Editar Noticia</th>
                    <th>Eliminar Noticia</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Titulo</th>
                    <th>Editar Noticia</th>
                    <th>Eliminar Noticia</th>
                  </tr>
                </tfoot>
               <!-- Hacer un for de aca --> <tbody>
               <?php
            foreach ($listar as $linha) {
                ?>
                  <tr>
                    <td><a href="vercompleta.php?ID=<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></a></td>
                    <td><?php echo $linha['numero']; ?></td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
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
