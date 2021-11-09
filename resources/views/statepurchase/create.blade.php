@extends('layouts.main',['activePage' => 'estadocompra', 'titlePage' => __('ESTADOS DE COMPRAS')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ESTADO DE COTIZACION</h4>
                <p class="card-category">REGISTRAR ESTADO DE COTIZACION</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('statepurchases.store') }}"  role="form" enctype="multipart/form-data">
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
