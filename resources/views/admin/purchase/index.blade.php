@extends('layouts.admin')
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Cotizaciones
			</h3>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<h4 class="card-title"></h4>
					<button type="button" style="background:transparent; border:none" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-ellipsis-v"></i>
					</button>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="{{ route('purchases.create') }}">Agregar</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="order-listing" class="table">
								<thead>
									<tr>
										<th>Código</th>
										<th>Cliente</th>
										<th>Asignado</th>
										<th>Expira</th>
										<th>Moneda</th>
										<th>Tiempo de entrega</th>
										<th>Forma de pago</th>
										<th>Estado</th>
										<th>Pie de página</th>
										<th>Condiciones</th>
										<th>Fecha de venta</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($purchases as $cotizacion)
									<tr>
										<th>{{ $cotizacion->codigo }}</th>
										<th>{{ $cotizacion->id_client }}</th>
										<th>{{ $cotizacion->id_user }}</th>
										<th>{{ $cotizacion->id_expire }}</th>
										<th>{{ $cotizacion->id_money }}</th>
										<th>{{ $cotizacion->id_delivery }}</th>
										<th>{{ $cotizacion->id_waytopay }}</th>
										<th>{{ $cotizacion->id_statepurchase }}</th>
										<th>{{ $cotizacion->id_footer }}</th>
										<th>{{ $cotizacion->id_condition }}</th>
										<td>
											<form action="{{ route('purchases.destroy',$cotizacion->id) }}" method="POST">
												<a style="color:black" href="{{ route('purchases.show',$cotizacion->id) }}"><i class="far fa-eye"></i></a>
												<a style="color:blue" href="{{ route('purchases.edit',$cotizacion->id) }}"><i class="fas fa-pen"></i></a>
												@csrf
												@method('DELETE')
												<button style="background:transparent; color:red; border:none" type="submit" href="{{ route('purchases.destroy',$cotizacion->id) }}"><i class="fas fa-trash"></i></button>
										</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
{{-- <script src="../../vendors/js/vendor.bundle.base.js"></script> --}}
<script src="../../vendors/js/vendor.bundle.addons.js"></script>
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/misc.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>
<script src="../../js/data-table.js"></script>