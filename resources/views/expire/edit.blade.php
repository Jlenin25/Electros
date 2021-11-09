@extends('layouts.main',['activePage' => 'expire', 'titlePage' => __(' ACTUALIZAR EXPIRA ')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">EXPIRA</h4>
                <p class="card-category">ACTUALIZAR EXPIRA</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('expires.update', $expire->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf

                    @include('expire.form')

                </form>
  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
