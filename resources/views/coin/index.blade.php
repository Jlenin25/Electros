@extends('layouts.main',['activePage' => 'moneda', 'titlePage' => __('MONEDAS')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">MONEDAS</h4>
									<p class="card-category">Monedas registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('coins.create') }}" class="btn btn-sm btn-primary">Añadir Moneda</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
                                            <th>No</th>
                                            <th>Moneda</th>
											<th class="text-right">Acciones</th>
										</thead>
										<tbody>
											@foreach($coins as $coin)
											<tr>
												<td>{{ ++$i }}</td>
											    <td>{{ $coin->moneda }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('coins.show',$coin->id) }}" class="btn btn-info"><i class="material-icons">note</i></a>
													<a href="{{ route('coins.edit',$coin->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('coins.destroy',$coin->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('coins.destroy',$coin->id) }}">
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
									{{ $coins->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
