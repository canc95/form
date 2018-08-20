@foreach ($forms as $form)
  <div class="modal fade" id="edit{{$form->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar {{$form->first_name .' '. $form->last_name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('formulario.update', $form->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label>Nombres</label>
              <input type="text" class="form-control" name="first_name" pattern="^[a-zA-ZÀ-ÿ\s]*$" value="{{$form->first_name}}">
            </div>
            <div class="form-group">
              <label>Apellidos</label>
              <input type="text" class="form-control" name="last_name" pattern="^[a-zA-ZÀ-ÿ\s]*$" value="{{$form->last_name}}">
            </div>
            <div class="form-group">
              <label>Correo Electrónico</label>
              <input type="email" class="form-control" name="email" value="{{$form->email}}">
            </div>
            <div class="form-group">
              <label>Mensaje</label>
              <textarea class="form-control" name="message">{{$form->message}}</textarea>
            </div>
            <div class="form-group text-center">
              <input type="submit" class="btn btn-outline-primary" value="Aceptar">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endforeach
