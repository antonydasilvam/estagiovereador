<?php include_once '../header.php';
  include_once "funcoes.class.php";
  include_once 'dadosnoticias.php';

  $funcoes = new FuncoesNoticias();
  $listar = $funcoes->listar();
  
?>



<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Listar Noticias</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Tipo de Noticia</th>
                    <th>Data de Publicação</th>
                    <th>Eliminar Noticia</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Titulo</th>
                    <th>Tipo de Noticia</th>
                    <th>Data de Publicação</th>
                    <th>Eliminar Noticia</th>
                  </tr>
                </tfoot>
               <!-- Hacer un for de aca --> <tbody>
               <?php
            foreach ($listar as $linha) {
                ?>
                  <tr>
                    <td><a href="ver.php?ID=<?php echo $linha['id']; ?>"><?php echo $linha['titulo']; ?></a></td>
                    <td><?php echo $linha['tiponoticia']; ?></td>
                    <td><?php echo $linha['datant']; ?></td>
                    <td><a href="excluir.php?ID=<?php echo $linha['id']; ?>&portada=<?php echo $linha['portada']; ?>" class="eliminar"><i class="fas fa-trash-alt"></i> Eliminar</a></td>
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
