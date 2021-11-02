<tr class="selected" id="fila'+cont+'">
	<td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td>
	<td><input type="hidden" name="price[]" value="'+price+"><input type="number" class="form-control" id="price[]" value="'+price+" disable></td>
	<td><input type="hidden" name="quantity" value="'+quantity+'"><input type="number" class="form-control" value="'+quantity+'" disabled></td>
	<td align="right">S/'+subtotal[cont]+'</td>
</tr>