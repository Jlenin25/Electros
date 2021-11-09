@extends('layouts.main',['activePage' => 'area', 'titlePage' => __('ACTUALIZAR AREA')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">AREA</h4>
                <p class="card-category">ACTUALIZAR AREA</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('areas.update', $area->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('area.form')

                </form>
  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
