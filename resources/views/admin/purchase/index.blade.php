@extends('layouts.main',['activePage' => 'compras', 'titlePage' => __('COTIZACION')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">COTOZACION</h4>
									<p class="card-category">Cotizaciones registradas</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('purchases.create') }}" class="btn btn-sm btn-primary">Añadir</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											<th>Código</th>
											<th>Cliente</th>
											<th>Responsable</th>
											<th>Expira</th>
											<th>Moneda</th>
											<th>Tiempo de entrega</th>
											<th>Forma de pago</th>
											<th>Estado</th>
											<th>Pie de página</th>
											<th>Condiciones</th>
											<th class="text-rigth">Acciones</th>
										</thead>
										<tbody>
											@foreach($purchases as $cotizacion)
											<tr>
												<td>{{ $cotizacion->codigo }}</td>
												<td>{{ $cotizacion->client->contacto }}</td>
												<td>{{ $cotizacion->user->name }}</td>
												<td>{{ $cotizacion->expire->expira }}</td>
												<td>{{ $cotizacion->coin->moneda }}</td>
												<td>{{ $cotizacion->deliverie->entrega }}</td>
												<td>{{ $cotizacion->waytopay->pago }}</td>
												<td>{{ $cotizacion->statepurchase->estado }}</td>
												<td>{{ $cotizacion->footer->piepagina }}</td>
												<td>{{ $cotizacion->condition->condiciones }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('purchasedetails.show',$cotizacion->id) }}" class="btn btn-info"><i class="material-icons">event_note</i></a>
													<a href="{{ route('purchases.edit',$cotizacion->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('purchases.destroy',$cotizacion->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('purchases.destroy',$cotizacion->id) }}">
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
									{{ $purchases->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
