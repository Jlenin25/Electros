<div class="form-group">
	<div class="row">
        <div class="col">
			<label for="exampleInputName1">Cliente</label>
			<select class="form-control" name="id_client" id="id_client">
				@foreach($cliente as $cliente)
				<option value="{{ $cliente->id }}">{{ $cliente->contacto }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Estado</label>
			<select class="form-control" name="id_statepurchase" id="id_statepurchase">
				@foreach($estado as $estado)
				<option value="{{ $estado->id }}">{{ $estado->estado }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
    <div class="row">
		<div class="col">
			<label for="exampleInputName1">Asignado</label>
			<select class="form-control" name="id_user" id="id_user">
				@foreach($user as $usuario)
				<option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
				@endforeach
			</select>
		</div>
        <div class="col">
			<label for="exampleInputName1">Tiempo de entrega</label>
			<select class="form-control" name="id_deliverie" id="id_deliverie">
				@foreach($delivery as $delivery)
				<option value="{{ $delivery->id }}">{{ $delivery->entrega }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
    <div class="row">
        <div class="col">
			<label for="exampleInputName1">Creado</label>
			<input type="text" value="{{ $evaluacion->creado }}" class="form-control" name="creado">
		</div>
	</div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mr-2">Agregar</button>
    </div>
</div>
