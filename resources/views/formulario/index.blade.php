@extends('layouts.app')
@section('content')

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

@endsection
