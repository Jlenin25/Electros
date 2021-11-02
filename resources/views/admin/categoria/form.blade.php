<div class="form-group">
  <label for="exampleInputName1">Nombre</label>
  <input value="{{ $categoria->name }}" type="text" class="form-control" name="name" placeholder="Nombre de la categoría...">
</div>
<div class="form-group">
  <label for="exampleTextarea1">Descripción</label>
  <input value="{{ $categoria->description }}" class="form-control" name="description" rows="4">
</div>