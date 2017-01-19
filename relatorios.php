 <?php

  require_once "classes/RelatorioOrganizacaoIndicada.php";

  $relatorio = new RelatorioOrganizacaoIndicada;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecossistema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('#organizacao_indicada').DataTable({
              dom: 'Bfrtip',
              buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
              ],
              "oLanguage": {
                  "sLengthMenu": "Mostrar _MENU_ registros por página",
                  "sZeroRecords": "Nenhum registro encontrado",
                  "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                  "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
                  "sInfoFiltered": "(filtrado de _MAX_ registros)",
                  "sSearch": "Pesquisar: ",
                  "oPaginate": {
                      "sFirst": "Início",
                      "sPrevious": "Anterior",
                      "sNext": "Próximo",
                      "sLast": "Último"
                  }
              },
          });
      });

      function downlod_relatorio_organizacao_indicada(){
        window.location = 'export.php';
      }
   </script>
</head>
<body>

<div class="container">
  <h2>Organizações Indicadas</h2>

  <button type="button" style="display:none" class="btn btn-default btn-sm pull-right" onclick="downlod_relatorio_organizacao_indicada();">
    <span class="glyphicon glyphicon-import" aria-hidden="true"></span> Download
  </button>

  <table  id="organizacao_indicada" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Indicadada por</th>
      </tr>
    </thead>
    <tbody>
     <?php
        $relatorio->exibir_relatorio_organizacao_indicada();
      ?>
    </tbody>
  </table>

</div>

</body>
</html>
