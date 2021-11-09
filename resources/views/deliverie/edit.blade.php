@extends('layouts.main',['activePage' => 'entrega', 'titlePage' => __('ACTUALIZAR ENTREGAS')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ENTREGAS</h4>
                <p class="card-category">ACTUALIZAR ENTREGAS</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('deliveries.update', $delivery->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('delivery.form')

                </form>
  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
