<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">RUC</label>
			<input type="text" value="{{ $client->ruc }}" class="form-control" name="ruc" placeholder="RUC">
		</div>
		<div class="col">
			<label for="exampleInputName1">Dirección</label>
			<input type="text" value="{{ $client->direccion }}" class="form-control" name="direccion" placeholder="Dirección">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Celular 1</label>
			<input type="text" value="{{ $client->celular1 }}" class="form-control" name="celular1" placeholder="Celular 1">
		</div>
		<div class="col">
			<label for="exampleInputName1">Email 1</label>
			<input type="text" value="{{ $client->email1 }}" class="form-control" name="email1" placeholder="Email 1">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Página Web</label>
			<input type="text" value="{{ $client->paginaweb }}" class="form-control" name="paginaweb" placeholder="Página web">
		</div>
		<div class="col">
			<label for="exampleInputName1">Estado</label>
			<input type="text" value="{{ $client->id_stateclient }}" class="form-control" name="id_stateclient" placeholder="Estado">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Razón Social</label>
			<input type="text" value="{{ $client->razonsocial }}" class="form-control" name="razonsocial" placeholder="Razón Social">
		</div>
		<div class="col">
			<label for="exampleInputName1">Cliente</label>
			<input type="text" value="{{ $client->contacto }}" class="form-control" name="contacto" placeholder="Cliente">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Celular 2</label>
			<input type="text" value="{{ $client->celular2 }}" class="form-control" name="celular2" placeholder="Celular 2">
		</div>
		<div class="col">
			<label for="exampleInputName1">Email 2</label>
			<input type="text" value="{{ $client->email2 }}" class="form-control" name="email2" placeholder="Email 2">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Área</label>
			<input type="text" value="{{ $client->id_area }}" class="form-control" name="id_area" placeholder="Área">
		</div>
		<div class="col">
			<label for="exampleInputName1">Asignado</label>
			<input type="text" value="{{ $client->id_user }}" class="form-control" name="id_user" placeholder="Asignado">
		</div>
	</div>
</div>