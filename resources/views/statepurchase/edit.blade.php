@extends('layouts.main',['activePage' => 'estadocompra', 'titlePage' => __('ACTUALIZAR ESTADOS DE COTIZACION')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ESTADOS DE COTIZACION</h4>
                <p class="card-category">ACTUALIZAR ESTADOS DE COTIZACION</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('statepurchases.update', $statepurchase->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('statepurchase.form')

                </form>
  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
