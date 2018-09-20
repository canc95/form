@foreach ($tests as $test)
  <div class="modal fade" id="delete{{$test->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Borrar {{$test->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h5>Estás seguro de que deseas eliminar {{$test->name}}</h5>
          </div>
          <div class="modal-footer">
            <a href="{{route('test.delete', $test->id)}}" class="btn btn-outline-danger">Borrar</a>
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
@endforeach
