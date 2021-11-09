@extends('layouts.main',['activePage' => 'estado', 'titlePage' => __('ESTADOS')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">ESTADOS</h4>
									<p class="card-category">Estados registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('stateclients.create') }}" class="btn btn-sm btn-primary">Añadir Estado</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
                                            <th>No</th>
                                            
                                            <th>Estado</th>
											<th class="text-right">Acciones</th>
										</thead>
										<tbody>
											@foreach($stateclients as $stateclient)
											<tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $stateclient->estado }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('stateclients.show',$stateclient->id) }}" class="btn btn-info"><i class="material-icons">note</i></a>
													<a href="{{ route('stateclients.edit',$stateclient->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('stateclients.destroy',$stateclient->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('stateclients.destroy',$stateclient->id) }}">
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
									{{ $stateclients->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
