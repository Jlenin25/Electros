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
      <h3 class="page-title">Registrar Cotización</h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('purchases.store') }}">
              @csrf
              @include('admin.purchase.form')
              <button type="submit" class="btn btn-primary mr-2">Agregar</button>
              <a href="{{ route('purchases.index') }}"class="btn btn-light">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/alerts.js') !!}
{!! Html::script('melody/js/avground.js') !!}
<script>
  $(document).ready(function() {
      $("#agregar").click(function(){
          agregar();
      });
  });

  var cont = 0;
  total = 0;
  subtotal = [];

  $("#guardar").hide();
  function agregar() {
      id_product = $("#id_product").val();
      producto = $("#id_product option:selected").text();
      cantidad = $("#cantidad").val();
      precioventa = 50;
      impuesto = 0.18;

      if(id_product!="" && cantidad!="" && cantidad>0) {
          subtotal[cont] = cantidad * precioventa;
          total = total + subtotal[cont];
          var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+')"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="id_product[]" value="'+id_product+'">'+producto+'</td><td><input type="hidden" name="cantidad[]" value="'+cantidad[]+'"><input type="number" class="form-control" value="'+cantidad[]+'"></td><td><input type="hidden" name="precioventa[]" id="precioventa[]" value="'+precioventa+'"><input type="number" name="precioventa[]" id="precioventa[]" class="form-control" value="'+precioventa+'" disabled></td><td align="right">S/'+subtotal[cont]+'</td><td><input type="hidden" name="precioneto" value="precioneto"><input type="number" class="form-control" value="precioneto" disabled></td></tr>';
          cont++;
          limpiar();
          totales();
          evaluar();
          $('#detalles').append(fila);
      } else {
          Swal.fire({
              type: 'error',
              text: 'Rellene todos los campos del detalle de las compras',
          })
      }
  }

  function limpiar() {
      $("#cantidad").val("");
      $("#precioventa").val("");
  }

  function totales() {
      $("#total").html("PEN"+total.tofixed(2));
      total_impuesto = total*impuesto/100;
      total_pagar = total+total_impuesto;
      $("#total_impuesto").html("PEN"+total_impuesto.tofixed(2));
      $("#total_pagar").val(total_pagar.tofixed(2));
  }

  function evaluar() {
      if(total>0) {
          $("#guardar").show();
      } else {
          $("#guardar").hide();
      }
  }

  function eliminar(index) {
      total = total - subtotal[index];
      total_impuesto = total*impuesto/100;
      total_pagar_html = total + total_impuesto;
      $("#total").html("PEN"+total);
      $("#total_impuesto").html("PEN"+total_impuesto);
      $("#total_pagar_html").html("PEN"+total_pagar_html);
      $("total_pagar").val(total_pagar_html.tofixed(2));
      $("#fila"+index).remove();
      evaluar();
  }
</script>
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