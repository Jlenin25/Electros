@extends('layouts.main',['activePage' => 'expire', 'titlePage' => __('EXPIRAS')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">EXPIRA</h4>
									<p class="card-category">Expira registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('expires.create') }}" class="btn btn-sm btn-primary">Añadir Expira</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
                                            <th>No</th>
                                            
                                            <th>Expira</th>
											<th class="text-right">Acciones</th>
										</thead>
										<tbody>
											@foreach($expires as $expire)
											<tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $expire->expira }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('expires.show',$expire->id) }}" class="btn btn-info"><i class="material-icons">note</i></a>
													<a href="{{ route('expires.edit',$expire->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('expires.destroy',$expire->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('expires.destroy',$expire->id) }}">
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
									{{ $expires->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
