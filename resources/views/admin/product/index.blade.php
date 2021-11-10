@extends('layouts.main',['activePage' => 'producto', 'titlePage' => __('PRODUCTOS')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">PRODUCTOS Y SERVICIOS</h4>
									<p class="card-category">Productos y Servicios registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Añadir</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
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
											<th class="text-rigth">Acciones</th>
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
												<th>{{ $cliente->categoria->name }}</th>
												<th>{{ $cliente->precioventa }}</th>
												<th>{{ $cliente->estado }}</th>
												<th>{{ $cliente->proserv }}</th>
												<td class="td-actions text-right">
													<a href="{{ route('products.edit',$cliente->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('products.destroy',$cliente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('products.destroy',$cliente->id) }}">
															<i class="material-icons">delete</i>
														</button>
													</form>
												</td>
											</tr>	
											@endforeach
									    </tbody>
									</table>
								</div>

								<div class="card-footer mr auto">
									{{ $products->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
