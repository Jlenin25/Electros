@extends('layouts.main',['activePage' => 'area', 'titlePage' => __('AREA')])
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">AREA</h4>
                <p class="card-category">REGISTRAR AREA</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('areas.store') }}"  role="form" enctype="multipart/form-data">
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
