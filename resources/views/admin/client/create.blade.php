@extends('layouts.main',['activePage' => 'cliente', 'titlePage' => __('REGISTRAR CLIENTES')] ) 

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">CLIENTE</h4>
              <p class="card-category">REGISTRAR CLIENTE</p>
            </div>
            <div class="card-body">

              <form class="forms-sample" method="POST" action="{{ route('clients.store') }}">
                @csrf
                @include('admin.client.form')
                <button type="submit" class="btn btn-primary mr-2">Agregar</button>
                <a href="{{ route('clients.index') }}"class="btn btn-light">Cancelar</a>
              </form>
              
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<script src="../../vendors/js/vendor.bundle.addons.js"></script>
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/misc.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>
<script src="../../js/data-table.js"></script>
<script src="../../js/file-upload.js"></script>
<script src="../../js/typeahead.js"></script>
<script src="../../js/select2.js"></script>