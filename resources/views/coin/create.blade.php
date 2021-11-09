@extends('layouts.main',['activePage' => 'moneda', 'titlePage' => __('MONEDAS')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">MONEDA</h4>
                <p class="card-category">REGISTRAR MONEDA</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('coins.store') }}"  role="form" enctype="multipart/form-data">
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
