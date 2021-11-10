<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">RUC</label>
			<input type="text" value="{{ $ordenCompra->id_client }}" class="form-control" name="ruc">
		</div>
		<div class="col">
			<label for="exampleInputName1">Razón Social</label>
			<input type="text" value="{{ $ordenCompra->id_client }}" class="form-control" name="ruc">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Adjuntar Archivo</label>
			<input type="text" value="{{ $ordenCompra->archivo }}" class="form-control" name="celular1">
		</div>
		<div class="col">
			<label for="exampleInputName1">Cotización</label>
			<input type="text" value="{{ $ordenCompra->id_purchase }}" class="form-control" name="email1">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-6">
			<label for="exampleInputName1">Entrega</label>
			<input type="text" value="{{ $ordenCompra->tiempoentrega }}" class="form-control" name="paginaweb">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Descripción</label>
			<input type="text" value="{{ $ordenCompra->descripcion }}" class="form-control" name="direccion">
		</div>
	</div>
	<br>
</div>