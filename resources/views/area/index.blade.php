@extends('layouts.main',['activePage' => 'area', 'titlePage' => __('AREA')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">AREAS</h4>
									<p class="card-category">Areas Registrados</p>

								</div>

								<div class="card-body" >
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('areas.create') }}" class="btn btn-sm btn-primary">Añadir Area</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											<th>No</th>
										    <th>Derivado</th>
											<th class="text-right">Acciones</th>
										</thead>
										<tbody>
											@foreach($areas as $area)
											<tr>
												<td>{{ ++$i }}</td>
											    <td>{{ $area->derivado }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('areas.show',$area->id) }}" class="btn btn-info"><i class="material-icons">note</i></a>
													<a href="{{ route('areas.edit',$area->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('areas.destroy',$area->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit">
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
									{{ $areas->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
