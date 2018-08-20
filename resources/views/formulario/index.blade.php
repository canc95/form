<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Prueba de Desarrollo Laravel</title>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
  <div class="container mt-5">
      <h2 class="text-center">Formulario</h2>

        <div class="responsive-table">
          <table id="table_form" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="text-center">Nombres</th>
                <th class="text-center">Apellidos</th>
                <th class="text-center">Correo Electrónico</th>
                <th class="text-center">Mensaje</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#add"><i class="far fa-plus-square"></i> Nuevo</button>

              @foreach ($forms as $form)
                <tr>
                  <th>{{$form->first_name}}</th>
                  <th>{{$form->last_name}}</th>
                  <th>{{$form->email}}</th>
                  <th>{{$form->message}}</th>
                  <th class="btn-col text-center">
                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="{{'#edit' . $form->id}}"><i class="far fa-edit"></i></button>
                      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="{{'#delete' . $form->id}}"><i class="fas fa-trash-alt"></i></button>
                  </th>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @include('formulario.modal_add')
        @include('formulario.modal_edit')
        @include('formulario.modal_delete')

  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#table_form').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ por páginas",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "sSearch":         "Buscar:",
            "sZeroRecords":    "No se encontraron resultados",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
            },
          },
          responsive: true,
          "lengthMenu": [[5, 10, 25], [5, 10, 25]]
        });
    });
  </script>
</body>
</html>
