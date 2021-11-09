@extends('layouts.main',['activePage' => 'condicion', 'titlePage' => __('CONDICIONES')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">CONDICIONES</h4>
									<p class="card-category">Condiciones registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('conditions.create') }}" class="btn btn-sm btn-primary">Añadir Condicion</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											
                                            <th>No</th>
                                        
                                            <th>Condiciones</th>
											<th class="text-right">Acciones</th>
										</thead>
										<tbody>
											@foreach($conditions as $condition)
											<tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $condition->condiciones }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('conditions.show',$condition->id) }}" class="btn btn-info"><i class="material-icons">note</i></a>
													<a href="{{ route('conditions.edit',$condition->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('conditions.destroy',$condition->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('conditions.destroy',$condition->id) }}">
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
									{{ $conditions->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
