@extends('layouts.admin')
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Clientes
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
						<li><a class="dropdown-item" href="{{ route('clients.create') }}">Agregar</a></li>
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
											<th>Cliente</th>
											<th>Celular-2</th>
											<th>Email-2</th>
											<th>Área</th>
											<th>Asignado</th>
											<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($clients as $cliente)
									<tr>
										<th>{{ $cliente->ruc }}</th>
										<th>{{ $cliente->direccion }}</th>
										<th>{{ $cliente->celular1 }}</th>
										<th>{{ $cliente->email1 }}</th>
										<th>{{ $cliente->paginaweb }}</th>
										<th>{{ $cliente->id_stateclient }}</th>
										<th>{{ $cliente->razonsocial }}</th>
										<th>{{ $cliente->contacto }}</th>
										<th>{{ $cliente->celular2 }}</th>
										<th>{{ $cliente->email2 }}</th>
										<th>{{ $cliente->id_area }}</th>
										<th>{{ $cliente->id_user }}</th>
										<td>
											<form action="{{ route('clients.destroy',$cliente->id) }}" method="POST">
												<a style="color:black" href="{{ route('clients.show',$cliente->id) }}"><i class="far fa-eye"></i></a>
												<a style="color:blue" href="{{ route('clients.edit',$cliente->id) }}"><i class="fas fa-pen"></i></a>
												@csrf
												@method('DELETE')
												<button style="background:transparent; color:red; border:none" type="submit" href="{{ route('clients.destroy',$cliente->id) }}"><i class="fas fa-trash"></i></button>
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