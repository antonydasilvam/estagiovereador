<?php include_once '../header.php';
  /*include_once "funcoes.class.php";
  include_once 'dadosgabinete.php';

  $funcoes = new Funcoes();
  $listar = $funcoes->listar();
  */
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
                  <tr>
                    <td>Antonio Zenoir</td>
                    <td>Vereador</td>
                    <td><img src="img/AntonioZenoir.jpeg" height="100" width="75" onclick='window.open(this.src)'></td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Rafael Kohanoski</td>
                    <td>Ajudante</td>
                    <td><img src="img/personaX.png" height="100" width="75" onclick='window.open(this.src)'></td>
                    <td><a href="ver.php"><i class="fas fa-edit"></i> Editar</a></td>
                    <td><a href="delete.php"><i class="fas fa-times"></i> Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Daniel Remedy</td>
                    <td>Secretario</td>
                    <td><img src="img/personax2.jpg" height="100" width="75" onclick='window.open(this.src)'></td>
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
