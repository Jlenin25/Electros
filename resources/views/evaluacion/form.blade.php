<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Cliente</label>
			<select class="form-control" name="id_client">
				@foreach($cliente as $cliente)
				<option value="{{ $cliente->id }}" selected="selected">{{ $cliente->contacto }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Estado</label>
			<select class="form-control" name="id_statepurchase">
				@foreach($estado as $estado)
				<option value="{{ $estado->id }}" selected="selected">{{ $estado->estado }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
    <div class="row">
		<div class="col">
			<label for="exampleInputName1">Responsable</label>
			<select class="form-control" name="id_user">
				@foreach($user as $usuario)
				<option value="{{ $usuario->id }}" selected="selected">{{ $usuario->name }}</option>
				@endforeach
			</select>
		</div>
        <div class="col">
			<label for="exampleInputName1">Tiempo de entrega</label>
			<select class="form-control" name="id_deliverie">
				@foreach($delivery as $delivery)
				<option value="{{ $delivery->id }}" selected="selected">{{ $delivery->entrega }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Dirección</label>
			<select class="form-control" name="id_client">
				@foreach($direccion as $direccion)
				<option value="{{ $direccion->id }}" selected="selected">{{ $direccion->direccion }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Creado</label>
			<input type="date" value="{{ $evaluacion->creado }}" class="form-control" name="creado">
		</div>
	</div>
</div>
