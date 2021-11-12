@extends('layouts.main',['activePage' => 'orden-trabajo', 'titlePage' => __('ORDEN DE TRABAJO')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">ORDEN DE TRABAJO</h4>
									<p class="card-category">Ordenes de trabajo registradas</p>
								</div>
								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('orden-trabajos.create') }}" class="btn btn-sm btn-primary">Añadir</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											<th>Cliente</th>
											<th>Responsable</th>
											<th>Procesado</th>
											<th>Estado</th>
											<th>Tiempo de entrega</th>
											<th>Creado</th>
											<th class="text-rigth">Acciones</th>
										</thead>
										<tbody>
											@foreach ($ordenTrabajos as $ordenTrabajo)
											<tr>
												<td>{{ $ordenTrabajo->client->contacto }}</td>
												<td>{{ $ordenTrabajo->user->name }}</td>
												<td>{{ $ordenTrabajo->procesado }}</td>
												<td>{{ $ordenTrabajo->estado }}</td>
												<td>{{ $ordenTrabajo->deliverie->entrega}}</td>
												<td>{{ $ordenTrabajo->creado }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('orden-trabajo.show',$ordenTrabajo->id) }}" class="btn btn-info"><i class="material-icons">event_note</i></a>
													<a href="{{ route('orden-trabajo.edit',$ordenTrabajo->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('orden-trabajo.destroy',$ordenTrabajo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('orden-trabajo.destroy',$ordenTrabajo->id) }}">
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
									{!! $ordenTrabajos->links() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
