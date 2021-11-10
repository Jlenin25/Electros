@extends('layouts.main')
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Orden de compra
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
						<li><a class="dropdown-item" href="{{ route('ordencompras.create') }}">Agregar</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="order-listing" class="table">
								<thead>
									<tr>
											<th>RUC</th>
											<th>Dirección</th>
											<th>Celular-1</th>
											<th>Email-1</th>
											<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($ordenCompra as $orden)
									<tr>
										<th>{{ $orden->id_client }}</th>
										<th>{{ $orden->descripcion }}</th>
										<th>{{ $orden->archivo }}</th>
										<th>{{ $orden->id_purchase }}</th>
										<th>{{ $orden->tiempoentrega }}</th>
										<td>
											<form action="{{ route('ordencompras.destroy',$orden->id) }}" method="POST">
												<a style="color:black" href="{{ route('ordencompras.show',$orden->id) }}"><i class="far fa-eye"></i></a>
												<a style="color:blue" href="{{ route('ordencompras.edit',$orden->id) }}"><i class="fas fa-pen"></i></a>
												@csrf
												@method('DELETE')
												<button style="background:transparent; color:red; border:none" type="submit" href="{{ route('ordencompras.destroy',$orden->id) }}"><i class="fas fa-trash"></i></button>
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