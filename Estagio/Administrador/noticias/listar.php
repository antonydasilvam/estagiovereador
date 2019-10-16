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
                    <th>Titulo</th>
                    <th>Serviço</th>
                    <th>Ver Noticia</th>
                    <th>Eliminar Noticia</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Titulo</th>
                    <th>Serviço</th>
                    <th>Ver Noticia</th>
                    <th>Eliminar Noticia</th>
                  </tr>
                </tfoot>
               <!-- Hacer un for de aca --> <tbody>
                  <tr>
                    <td>Setembro Amarelo</td>
                    <td>Nenhum</td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Ajudando Cachorros de Rua</td>
                    <td>Causa Animal</td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Visita ao Hospital</td>
                    <td>Saude</td>
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
