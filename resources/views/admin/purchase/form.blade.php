<div class="form-group">
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Código</label>
			<input type="text" value="{{ $purchase->codigo }}" class="form-control" name="codigo">
		</div>
		<div class="col">
			<label for="exampleInputName1">Cliente</label>
			<input type="text" value="{{ $purchase->id_client }}" class="form-control" name="id_client">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="exampleInputName1">Asignado</label>
			<input type="text" value="{{ $purchase->id_user }}" class="form-control" name="id_user">
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
	<br>
	<br>
	<br>
	<form action="" method="post">
		<div class="form-group">
			{{-- <div class="col"> --}}
				<label for="exampleInputName1">Condiciones Generales</label>
				<input type="text" value="{{ $purchase->id_product }}" class="float-right" name="id_product">
			{{-- </div> --}}
			<button type="button" class="btn btn-primary float-right" id="agregar">Agregar Producto</button>
		</div>
		<div class="form-group">
			<h4 class="card-title">Detalles de venta</h4>
			<div class="table-responsive col-md-12">
				<table id="detalles" class="table table-striped">
					<thead>
						<tr>
							<th>Eliminar</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Sub Total</th>
						</tr>
					</thead>
					<tbody>
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
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>