<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Código</label>
			<input type="text" value="{{ $product->codigo }}" class="form-control" name="codigo">
		</div>
		<div class="col">
			<label for="exampleInputName1">Nombre</label>
			<input type="text" value="{{ $product->nombre }}" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Estado</label>
			<input type="text" value="{{ $product->estado }}" class="form-control" name="estado">
		</div>
		<div class="col">
			<label for="exampleInputName1">Precio de Costo</label>
			<input type="number" value="{{ $product->preciocosto }}" class="form-control" name="preciocosto">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Stock</label>
			<input type="number" value="{{ $product->stock }}" class="form-control" name="stock">
		</div>
		<div class="col">
			<label for="exampleInputName1">Descripción</label>
			<input type="text" value="{{ $product->descripcion }}" class="form-control" name="descripcion">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Proveedor</label>
			{{-- <input type="text" value="{{ $product->id_provider }}" class="form-control" name="id_provider"> --}}
			<select class="form-control" name="id_provider">
				@foreach($providers as $proveedor)
				<option value="{{ $proveedor->id }}">{{ $proveedor->contacto }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Fabricante</label>
			<input type="text" value="{{ $product->fabricante }}" class="form-control" name="fabricante">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Categoría</label>
			{{-- <input type="text" value="{{ $product->id_categoria }}" class="form-control" name="id_categoria"> --}}
			<select class="form-control" name="id_categoria" id="id_categoria">
				@foreach($categorias as $categoria)
				<option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Precio de Venta</label>
			<input type="number" value="{{ $product->precioventa }}" class="form-control" name="precioventa">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Imágen</label>
			<input type="text" value="{{ $product->imagen }}" class="form-control" name="imagen">
			{{-- <input type="file" class="form-control" name="imagen" id="image"> --}}
		</div>
		<div class="col">
			<label for="exampleInputName1">Producto / Servicio</label>
			<input type="text" value="{{ $product->proserv }}" class="form-control" name="proserv">
		</div>
	</div>
</div>