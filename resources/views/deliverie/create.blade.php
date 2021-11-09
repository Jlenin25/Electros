@extends('layouts.main',['activePage' => 'entrega', 'titlePage' => __('ENTREGAS')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ENTREGAS</h4>
                <p class="card-category">REGISTRAR ENTREGAS</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('deliveries.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('deliverie.form')

                </form>
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
