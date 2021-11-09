@extends('layouts.main',['activePage' => 'proveedor', 'titlePage' => __('PROVEEDOR')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">PROVEEDOR</h4>
              <p class="card-category">REGISTRAR PROVEEDOR</p>
            </div>
            <div class="card-body">

              <form class="forms-sample" method="POST" action="{{ route('providers.store') }}">
                @csrf
                @include('admin.provider.form')
                <button type="submit" class="btn btn-primary mr-2">Agregar</button>
                <a href="{{ route('providers.index') }}"class="btn btn-light">Cancelar</a>
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