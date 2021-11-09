@extends('layouts.main',['activePage' => 'categoria', 'titlePage' => __('CATEGORIAS')] )
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">CATEGORIAS</h4>
									<p class="card-category">Categorias registrados</p>

								</div>

								<div class="card-body">
									@if (session('success'))
										<div class="alert alert-success" role="success">
											{{session('success')}}
										</div>		
									@endif
									<div class="row">
										<div class="col-12 text-right">
											<a href="{{ route('categorias.create') }}" class="btn btn-sm btn-primary">Añadir Categoria</a>
										</div>
									</div>
									<div class="table-responsive"></div>
									<table class="table">
										<thead class="text-primary">
											<th>Nombre</th>
											<th class="text-center">Descipción</th>
											<th class="text-rigth">Acciones</th>
										</thead>
										<tbody>
											@foreach($categorias as $categoria)
											<tr>
												<td>{{ $categoria->name }}</td>
												<td>{{ $categoria->description }}</td>
												<td class="td-actions text-right">
													<a href="{{ route('categorias.edit',$categoria->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
													<form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿SEGURO DE ELIMINAR?')">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit" href="{{ route('categorias.destroy',$categoria->id) }}">
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
									{{ $categorias->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
