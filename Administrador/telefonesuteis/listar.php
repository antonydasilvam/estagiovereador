<?php include_once '../header.php';
  
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
                    <th>Numero</th>
                    <th>Editar Telefone</th>
                    <th>Eliminar Telefone</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Numero</th>
                    <th>Editar Telefone</th>
                    <th>Eliminar Telefone</th>
                  </tr>
                </tfoot>
               <!-- Hacer un for de aca --> <tbody>
                  <tr>
                    <td>Bombeiros</td>
                    <td>+55 9876546546</td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Policia</td>
                    <td>+55 987987987987</td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Gabinete</td>
                    <td>+55 97 987 987 98</td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  
                  
                </tbody> <!-- Hasta aca -->
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Última atualização 26/09/2019</div>
        </div>

        <?php
include_once '../footer.php';
?>
