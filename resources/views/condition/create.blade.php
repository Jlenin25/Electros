@extends('layouts.main',['activePage' => 'condicion', 'titlePage' => __('CONDICIONES')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">CONDICION</h4>
                <p class="card-category">REGISTRAR CONDICION</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('conditions.store') }}"  role="form" enctype="multipart/form-data">
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
