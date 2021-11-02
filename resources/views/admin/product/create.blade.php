@extends('layouts.admin')
<link rel="stylesheet" href="../../vendors/iconfonts/font-awesome/css/all.min.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" href="../../images/favicon.png" />
@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Registrar Producto</h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('clients.store') }}">
              @csrf
              @include('admin.product.form')
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