@extends('layouts.main',['activePage' => 'footer', 'titlePage' => __('PIE DE PAGINA')])


@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">PIE DE PAGINA</h4>
                <p class="card-category">REGISTRAR PIE DE PAGINA</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('footers.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('footer.form')

                </form>
                
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
