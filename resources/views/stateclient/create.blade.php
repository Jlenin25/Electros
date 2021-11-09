@extends('layouts.main',['activePage' => 'estado', 'titlePage' => __('ESTADOS')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ESTADO DEL CLIENTE</h4>
                <p class="card-category">REGISTRAR ESTADO DEL CLIENTE</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('stateclients.store') }}"  role="form" enctype="multipart/form-data">
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
