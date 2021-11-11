@extends('layouts.main',['activePage' => 'evaluacion', 'titlePage' => __('CREAR EVALUACION')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">EVALUACION</h4>
                <p class="card-category">REGISTRAR EVALUACION</p>
              </div>
              <div class="card-body">

                <form method="POST" action="{{ route('evaluacions.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('evaluacion.form')

                </form>

              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

