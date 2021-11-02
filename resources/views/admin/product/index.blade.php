@extends('layouts.admin')
@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				Productos
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
						<li><a class="dropdown-item" href="{{ route('products.create') }}">Agregar</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="order-listing" class="table">
								<thead>
									<tr>
											<th>Código</th>
											<th>Nombre</th>
											<th>Imagen</th>
											<th>P-Costo</th>
											<th>Stock</th>
											<th>Descripción</th>
											<th>Proveedor</th>
											<th>Fabricante</th>
											<th>Categoría</th>
											<th>P-Venta</th>
											<th>Estado</th>
											<th>P / S</th>
											<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($products as $cliente)
									<tr>
										<th>{{ $cliente->codigo }}</th>
										<th>{{ $cliente->nombre }}</th>
										<th>{{ $cliente->imagen }}</th>
										<th>{{ $cliente->preciocosto }}</th>
										<th>{{ $cliente->stock }}</th>
										<th>{{ $cliente->descripcion }}</th>
										<th>{{ $cliente->id_provider }}</th>
										<th>{{ $cliente->fabricante }}</th>
										<th>{{ $cliente->id_categoria }}</th>
										<th>{{ $cliente->precioventa }}</th>
										<th>{{ $cliente->estado }}</th>
										<th>{{ $cliente->proserv }}</th>
										<td>
											<form action="{{ route('products.destroy',$cliente->id) }}" method="POST">
												<a style="color:black" href="{{ route('products.show',$cliente->id) }}"><i class="far fa-eye"></i></a>
												<a style="color:blue" href="{{ route('products.edit',$cliente->id) }}"><i class="fas fa-pen"></i></a>
												@csrf
												@method('DELETE')
												<button style="background:transparent; color:red; border:none" type="submit" href="{{ route('products.destroy',$cliente->id) }}"><i class="fas fa-trash"></i></button>
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