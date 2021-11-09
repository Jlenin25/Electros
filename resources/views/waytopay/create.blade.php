@extends('layouts.main',['activePage' => 'pagos', 'titlePage' => __('FORMAS DE PAGOS')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">FORMAS DE PAGO</h4>
                <p class="card-category">REGISTRAR FORMAS DE PAGO</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('waytopays.store') }}"  role="form" enctype="multipart/form-data">
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
