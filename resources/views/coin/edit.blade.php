@extends('layouts.main',['activePage' => 'moneda', 'titlePage' => __('ACTUALIZAR MONEDAS')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">COTIZACION</h4>
                <p class="card-category">ACTUALIZAR COTIZACION</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('coins.update', $coin->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('coin.form')

                </form>
  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
