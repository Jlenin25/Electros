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
              <div>
                <form class="forms-sample" method="POST" action="{{ route('purchases.store') }}">
                  @csrf
                  @include('admin.purchase._form')
                </form>
                <div class="form-group">
                  <h4 class="card-title">Detalles de venta</h4>
                  <div class="table-responsive col-md-12">
                    <table id="detalles" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Eliminar</th>
                          <th>Producto</th>
                          <th>Precio</th>
                          <th>Cantidad</th>
                          <th>Sub Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product as $producto)
                        <tr>
                          <th>
                            <form action="{{ route('purchases.destroy',$producto->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button style="background:transparent; color:red; border:none" type="submit" href="{{ route('purchases.destroy',$producto->id) }}"><i class="fas fa-trash"></i></button>
                            </form>
                          </th>
                          <th>{{$producto->nombre }}</th>
                          <th>{{$producto->precioventa }}</th>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="4">
                            <p align="right">Subtotal: </p>
                          </th>
                          <th colspan="4">
                            <p align="right"><span id="subtotal">0.00</span></p>
                          </th>
                        </tr>
                        <tr>
                          <th colspan="4">
                            <p align="right">IGV: </p>
                          </th>
                          <th colspan="4">
                            <p align="right"><span id="igv">0.00</span></p>
                          </th>
                        </tr>
                        <tr>
                          <th colspan="4">
                            <p align="right">Total: </p>
                          </th>
                          <th colspan="4">
                            <p align="right">
                              <span id="total">0.00</span>
                              {{-- <input type="hidden" name="total" id="total_pagar"> --}}
                            </p>
                          </th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </form>




          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
      $("#agregar").click(function(){
          agregar();
      });
  });

  var cont = 0; total = 0; subtotal = [];

  $("#guardar").hide();

  function agregar() {
      id_product = $("#id_product").val();
      producto = $("#id_product option:selected").text();
      quantity = $("#quantity").val();
      price = $("price").val();
      impuesto = $("#tax").val();

      if(id_product!="" && quantity!="" && quantity>0 && price!="") {
          subtotal[cont] = quantity * price;
          total = total + subtotal[cont];
          var fila = '<tr class="select" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td>  <td><input type="hidden" name="id_product[] value="'+id_product+'">'+producto+'</td><td><input type="hidden" id="price[]" name="price[]" value="'+price+'"><input class="form-control" type="number" id="price[]" value="'+price+'" disable></td><td><input type="hidden" name="quantity[]" value="'+quantity+'"><input class="form-control" type="number" value="'+quantity+'" disable></td><td align="right">S/.'+subtotal[cont]+'</td></tr>';
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
      $("#quantity").val("");
      $("#price").val("");
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
      total = total-subtotal[index];
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