<div class="btn-group" role="group">
    <a href="{{ $editRoute }}" class="btn btn-primary btn-sm me-2">Editar</a>
    <form action="{{ $deleteRoute }}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
    </form>
</div>
