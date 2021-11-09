@extends('layouts.main',['activePage' => 'condicion', 'titlePage' => __('ACTUALIZAR CONDICION')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">CONDICION</h4>
                <p class="card-category">ACTUALIZAR CONDICION</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('conditions.update', $condition->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('condition.form')

                </form>
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
