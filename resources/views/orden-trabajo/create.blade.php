
@extends('layouts.main',['activePage' => 'orden-trabajo', 'titlePage' => __('CREAR ORDEN DE TRABAJO')] )
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">ORDEN DE TRABAJO</h4>
                <p class="card-category">REGISTRAR ORDEN DE TRABAJO</p>
              </div>
              <div class="card-body">

                <form method="POST" action="{{ route('orden-trabajos.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('orden-trabajo.form')

                </form>

              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
