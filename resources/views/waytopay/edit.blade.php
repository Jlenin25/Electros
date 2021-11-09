@extends('layouts.main',['activePage' => 'pagos', 'titlePage' => __('ACTUALIZAR FORMAS DE PAGOS')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">FORMAS DE PAGOS</h4>
                <p class="card-category">ACTUALIZAR FORMAS DE PAGOS</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('waytopays.update', $waytopay->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('waytopay.form')

                </form>
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
