@extends('layouts.main',['activePage' => 'proveedor', 'titlePage' => __('PROVEEDOR')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">PROVEEDORES</h4>
									<p class="card-category">Proveedores registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('providers.create') }}" class="btn btn-sm btn-primary">Añadir Proveedor</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											<th>RUC</th>
											<th>Dirección</th>
											<th>Celular</th>
											<th>Email</th>
											<th>Página Web</th>
											<th>Estado</th>
											<th>Razón social</th>
											<th>Proveedor</th>
											<th>Área</th>
											<th>Asignado</th>
											<th class="text-rigth">Acciones</th>
										</thead>
										<tbody>
											@foreach($providers as $proveedor)
											<tr>
												<th>{{ $proveedor->ruc }}</th>
												<th>{{ $proveedor->direccion }}</th>
												<th>{{ $proveedor->celular1 }}</th>
												<th>{{ $proveedor->email1 }}</th>
												<th>{{ $proveedor->paginaweb }}</th>
												<th>{{ $proveedor->stateclient->estado }}</th>
												<th>{{ $proveedor->razonsocial }}</th>
												<th>{{ $proveedor->contacto }}</th>
												<th>{{ $proveedor->area->derivado }}</th>
												<th>{{ $proveedor->user->name }}</th>
												<td class="td-actions text-right">
													<a href="{{ route('providers.edit',$proveedor->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('providers.destroy',$proveedor->id) }}}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('providers.destroy',$proveedor->id) }}">
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
									{{ $providers->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
