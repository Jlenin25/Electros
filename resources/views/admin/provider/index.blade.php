@extends('layouts.admin')
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Proveedores
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
						<li><a class="dropdown-item" href="{{ route('providers.create') }}">Agregar</a></li>
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
											<th>Página Web</th>
											<th>Estado</th>
											<th>Razón social</th>
											<th>Proveedor</th>
											<th>Celular-2</th>
											<th>Email-2</th>
											<th>Área</th>
											<th>Asignado</th>
											<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($providers as $proveedor)
									<tr>
										<th>{{ $proveedor->ruc }}</th>
										<th>{{ $proveedor->direccion }}</th>
										<th>{{ $proveedor->celular1 }}</th>
										<th>{{ $proveedor->email1 }}</th>
										<th>{{ $proveedor->paginaweb }}</th>
										<th>{{ $proveedor->id_stateclient }}</th>
										<th>{{ $proveedor->razonsocial }}</th>
										<th>{{ $proveedor->contacto }}</th>
										<th>{{ $proveedor->celular2 }}</th>
										<th>{{ $proveedor->email2 }}</th>
										<th>{{ $proveedor->id_area }}</th>
										<th>{{ $proveedor->id_user }}</th>
										<td>
											<form action="{{ route('providers.destroy',$proveedor->id) }}" method="POST">
												<a style="color:black" href="{{ route('providers.show',$proveedor->id) }}"><i class="far fa-eye"></i></a>
												<a style="color:blue" href="{{ route('providers.edit',$proveedor->id) }}"><i class="fas fa-pen"></i></a>
												@csrf
												@method('DELETE')
												<button style="background:transparent; color:red; border:none" type="submit" href="{{ route('providers.destroy',$proveedor->id) }}"><i class="fas fa-trash"></i></button>
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