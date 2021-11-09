@extends('layouts.main',['activePage' => 'cliente', 'titlePage' => __('CLIENTES')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">CLIENTES</h4>
									<p class="card-category">Clientes registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary">Añadir Cliente</a>
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
											<th>Cliente</th>
											<th>Área</th>
											<th>Asignado</th>
											<th class="text-right">Acciones</th>
										</thead>
										<tbody>
											@foreach($clients as $cliente)
											<tr>
												<td>{{ $cliente->ruc }}</th>
												<td>{{ $cliente->direccion }}</td>
												<td>{{ $cliente->celular1 }}</td>
												<td>{{ $cliente->email1 }}</td>
												<td>{{ $cliente->paginaweb }}</td>
												<td>{{ $cliente->id_stateclient }}</td>
												<td>{{ $cliente->razonsocial }}</td>
												<td>{{ $cliente->contacto }}</td>
												<td>{{ $cliente->id_area }}</td>
												<td>{{ $cliente->id_user }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('clients.edit',$cliente->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('clients.destroy',$cliente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('clients.destroy',$cliente->id) }}">
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
									{{ $clients->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
