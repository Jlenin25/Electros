@extends('layouts.main',['activePage' => 'compras', 'titlePage' => __('COTIZACION')])
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form class="forms-sample" method="POST" action="{{ route('purchases.store') }}">
          @csrf
          <div class="text-right">
            <a href="{{ route('purchases.index') }}"  class="btn btn-primary">CERRAR</a>
        </div>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">COTIZACION</h4>
              <p class="card-category">INGRESA NUEVA COTIZACION</p>
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    @method('put')
                    @csrf
                        <div class="form-group">
                            <label for="">Codigo</label>
                            <input type="text" name="id_purchase" id="id_purchase" value="{{ $purchase->codigo }}" class="form-control" required disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Producto</label>
                            {{-- <input type="text" class="form-control" name="id_product" id="id_product"> --}}
                            <select class="form-control" name="id_product" id="id_product">
                                @foreach($products as $products)
                                <option value="{{ $products->id }}">{{ $products->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Cantidad</label>
                            <input type="text" id="cantidad" name="cantidad" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" id="precio" name="precio" class="form-control" required>
                        </div>
                        <br> 
                        
                        <br>
                        <div class="form-group">
                                <button type="submit"  class="btn btn-primary btn-block text-white">AGREGAR</button>
                        </div> 
                    </form>
            </div>
          </div>
        </form>

            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">COTIZACION</h4>
                <p class="card-category">INGRESA NUEVA COTIZACION</p>
              </div>
              <div class="card-body">
  
                <div class="table-responsive py-2">
                    <table class="table table-striped">
                            <thead>
                                    <tr>
                                            <th>ID de cot</th>
                                            <th>Productos</th>
                                            <th>Cantidad</th>
                                            <th>Precio de venta</th>
                                            <th>Precio Neto</th>
                                            <th>Acciones</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php
                            $costoTotal = 0;
                            $costoigv = 0;
                            $costoventa = 0;
                            ?>
                            @foreach($purchase as $detalle)
                            @if($purchase->id_purchase  == $detalles->codigo)
                            <?php $costoTotal += $detalles->total; ?>
                                    <tr>
                                        <td>{{ $detalle->id_purchase }}</td>
                                        <td>{{ $detalle->id_product }}</td>
                                        <td>{{ $detalle->cantidad }}</td>
                                        <td>{{ $detalle->precio }}</td>
                                        <td>{{ $detalle->total }}</td>
                                        <td>
                                            <form action="{{ route('purchasedetails.destroy',$detalle->id) }}" class="d-inline" method="post" >
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit" href="{{ route('purchasedetails.destroy',$detalle->id) }}">Eliminar</button>
                                            </form> 
                                        </td>
                                    </tr>
                                    <br>
                            </tbody>
                            @endif
                            @endforeach
                            <tr>
                                    <td>COSTO TOTAL</td>
                                    <td>
                                            {{$costoTotal}}</td>
                            </tr>
                            <?php $costoigv += $costoTotal*0.18; ?>
                            <tr>
                                    <td>IGV</td>
                                    <td>{{$costoigv}}</td>
                            </tr>
                            <?php $costoventa += $costoTotal+$costoigv; ?>
                            <tr>
                                    <td>PRECIO DE VENTA TOTAL</td>
                                    <td>{{$costoventa}}</td>
                            </tr>
                    </table>
            </div>
                     
  
              </div>
            </div>


      </div>
    </div>
  </div>
</div>
@endsection
