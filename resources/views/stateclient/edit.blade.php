@extends('layouts.main',['activePage' => 'estado', 'titlePage' => __('ACTUALIZAR ESTADO')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ESTADO</h4>
                <p class="card-category">ACTUALIZAR ESTADO</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('stateclients.update', $stateclient->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('stateclient.form')

                </form>
  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
