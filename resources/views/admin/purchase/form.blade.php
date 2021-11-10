<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Código</label>
			<input type="text" class="form-control" name="codigo" value="{{ $purchase->codigo }}">
		</div>
		<div class="col">
			<label for="exampleInputName1">Cliente</label>
			<select class="form-control" name="id_client" id="id_client">
				@foreach($cliente as $cliente)
				<option value="{{ $cliente->id }}">{{ $cliente->contacto }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Responsable</label>
			<select class="form-control" name="id_user" id="id_user">
				@foreach($user as $usuario)
				<option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Expira</label>
			<select class="form-control" name="id_expire" id="id_expire">
				@foreach($expira as $expira)
				<option value="{{ $expira->id }}">{{ $expira->expira }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Moneda</label>
			<select class="form-control" name="id_coin" id="id_coin">
				@foreach($coins as $coins)
				<option value="{{ $coins->id }}">{{ $coins->moneda }}</option>
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
			<label for="exampleInputName1">Forma de pago</label>
			<select class="form-control" name="id_waytopay" id="id_waytopay">
				@foreach($pago as $pago)
				<option value="{{ $pago->id }}">{{ $pago->pago }}</option>
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
			<label for="exampleInputName1">Pie de página</label>
			<select class="form-control" name="id_footer" id="id_footer">
				@foreach($pie as $pie)
				<option value="{{ $pie->id }}">{{ $pie->piepagina }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Condiciones Generales</label>
			<select class="form-control" name="id_condition" id="id_condition">
				@foreach($condicion as $condicion)
				<option value="{{ $condicion->id }}">{{ $condicion->condiciones }}</option>
				@endforeach
			</select>
		</div>
	</div>
</div>