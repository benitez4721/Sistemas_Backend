@extends("../layouts.plantilla")

@section("cabecera")

MODIFICAR SALA

@endsection

@section("contenido")
	<form method="post" action="/salas/{{$sala->id}}">
	
	
		<table>
			<tr>
				<td>Nombre: </td>
			
		
				<td>
					<input type="text" name="Nombre_Sala" value="{{$sala->Nombre_Sala}}">
					
		
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
				</td>
			</tr>		
			<tr>
				<td style="color: red">@error('Nombre_Sala') {{$message}} @enderror</td>
			</tr>
			
			<tr>
				<td>Cantidad de Maquinas: </td>
			
		
				<td>
					<input type="text" name="numero_maquinas" value="{{$sala->numero_maquinas}}">
		
				</td>
			</tr>
			<tr>
				<td style="color: red">@error('numero_maquinas') {{$message}} @enderror</td>
			</tr>		
			
			<tr>
				<td>
					
					<input type="submit" name="enviar" value="Actualizar">
				</td>
				
			</tr>
			
			
			
		</table>
	</form>
	

	<form method="post" action="/salas/{{$sala->id}}">
	
		{{csrf_field()}}
	<input type="hidden" name="_method" value="DELETE">

	<input type="submit"  value="Eliminar Sala">
	
   </form>
@endsection
