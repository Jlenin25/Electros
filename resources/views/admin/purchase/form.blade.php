<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Código</label>
			<input type="text" value="{{ $purchase->codigo }}" class="form-control" name="codigo">
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
			<label for="exampleInputName1">Asignado</label>
			<select class="form-control" name="id_user" id="id_user">
				@foreach($user as $usuario)
				<option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Expira</label>
			<input type="text" value="{{ $purchase->id_expire }}" class="form-control" name="id_expire">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Moneda</label>
			<input type="text" value="{{ $purchase->id_coin }}" class="form-control" name="id_coin">
		</div>
		<div class="col">
			<label for="exampleInputName1">Tiempo de entrega</label>
			<input type="text" value="{{ $purchase->id_deliverie }}" class="form-control" name="id_deliverie">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Forma de pago</label>
			<input type="text" value="{{ $purchase->id_waytopay }}" class="form-control" name="id_waytopay">
		</div>
		<div class="col">
			<label for="exampleInputName1">Estado</label>
			<input type="text" value="{{ $purchase->id_statepurchase }}" class="form-control" name="id_statepurchase">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Pie de página</label>
			<input type="text" value="{{ $purchase->id_footer }}" class="form-control" name="id_footer">
		</div>
		<div class="col">
			<label for="exampleInputName1">Condiciones Generales</label>
			<input type="text" value="{{ $purchase->id_condition }}" class="form-control" name="id_condition">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Producto</label>
			<select class="form-control" name="id_product" id="id_product">
				@foreach($product as $producto)
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
				@endforeach
			</select>
		</div>
		<div class="col">
			<label for="exampleInputName1">Cantidad</label>
			<input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId">
		</div>
	</div>
	<br>
	<br>
	<br>

		<div class="form-group">
			<button type="submit" class="btn btn-primary float-right" id="agregar">Agregar Producto</button>
		</div>
		<div class="form-group">
			<h4 class="card-title">Detalles de venta</h4>
			<div class="table-responsive col-md-12">
				<table id="detalles" class="table table-striped">
					<thead>
						<tr>
							<th>Eliminar</th>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Precio Venta</th>
							<th>Total</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th colspan="4">
								<p align="right">Subtotal: </p>
							</th>
							<th colspan="4">
								<p align="right"><span id="subtotal">0.00</span></p>
							</th>
						</tr>
						<tr>
							<th colspan="4">
								<p align="right">IGV: </p>
							</th>
							<th colspan="4">
								<p align="right"><span id="igv">0.00</span></p>
							</th>
						</tr>
						<tr>
							<th colspan="4">
								<p align="right">Total: </p>
							</th>
							<th colspan="4">
								<p align="right">
									<span id="total">0.00</span>
									{{-- <input type="hidden" name="total" id="total_pagar"> --}}
								</p>
							</th>
						</tr>
					</tfoot>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>















</div>