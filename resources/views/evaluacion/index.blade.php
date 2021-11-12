@extends('layouts.main',['activePage' => 'evaluacion', 'titlePage' => __('EVALUACION')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">EVALUACION</h4>
									<p class="card-category">Evaluaciones registradas</p>
								</div>
								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">{{session('success')}}</div>
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('evaluacions.create') }}" class="btn btn-sm btn-primary">Añadir</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											<th>Cliente</th>
											<th>Estado</th>
											<th>Responsable</th>
											<th>Tiempo de entrega</th>
											<th>Dirección</th>
											<th>Creado</th>
											<th class="text-rigth">Acciones</th>
										</thead>
										<tbody>
											@foreach ($evaluacions as $evaluacion)
											<tr>
												<td>{{ $evaluacion->client->contacto }}</td>
												<td>{{ $evaluacion->estado }}</td>
												<td>{{ $evaluacion->user->name }}</td>
												<td>{{ $evaluacion->delivery->entrega }}</td>
												<td>{{ $evaluacion->client->direccion }}</td>
												<td>{{ $evaluacion->creado }}</td>
												<td class="td-actions">
													<a href="{{ route('evaluacions.show',$evaluacion->id) }}" class="btn btn-info"><i class="material-icons">event_note</i></a>
													<a href="{{ route('evaluacions.edit',$evaluacion->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('evaluacions.destroy',$evaluacion->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('evaluacions.destroy',$evaluacion->id) }}">
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
									{!! $evaluacions->links() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection