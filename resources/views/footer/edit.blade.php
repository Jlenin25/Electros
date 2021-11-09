@extends('layouts.main',['activePage' => 'footer', 'titlePage' => __(' ACTUALIZAR PIE DE PAGINA')] )

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">PIE DE PAGINA</h4>
                <p class="card-category">ACTUALIZAR PIE DE PAGINA</p>
              </div>
              <div class="card-body">
  
                <form method="POST" action="{{ route('footers.update', $footer->id) }}"  role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
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
