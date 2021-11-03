{{-- @foreach($product as $producto) --}}
	<tr class="selected" id="fila'+cont+'">
		<td>
			<button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+')"><i class="fa fa-times"></i></button>
		</td>
		<td>
			<input type="hidden" name="id_product[]" value="'+id_product+'">{{ $producto->nombre }}
		</td>
		<td>
			<input type="hidden" name="cantidad[]" value="'+cantidad[]+'"><input type="number" class="form-control" value="'+cantidad[]+'">
		</td>
		<td>
			<input type="hidden" name="precioventa[]" id="precioventa[]" value="'+precioventa+'"><input type="number" name="precioventa[]" id="precioventa[]" class="form-control" value="{{ $producto->precioventa }}" disabled>
		</td>
		<td align="right">S/<script>'+subtotal[cont]+'</script></td>
		<td>
			<input type="hidden" name="precioneto" value="precioneto"><input type="number" class="form-control" value="precioneto" disabled>
		</td>
	</tr>
{{-- @endforeach --}}