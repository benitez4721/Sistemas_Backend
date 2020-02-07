@extends("../layouts.plantilla")

@section("cabecera")

INGRESAR MAQUINA

@endsection

@section("contenido")
	<form method="post" action="/maquinas/{{$maquina->id}}">
	
	
		<table>
			<tr>
				<td>Ip: </td>
			
		
				<td>
					<input type="text" name="ip" value="{{$maquina->ip}}">
					
		
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
				</td>
			</tr>	

			<tr>
				<td style="color: red">@error('ip') {{$message}} @enderror</td>
			</tr>	
			
			
			<tr>
				<td>Sistema Operativo: </td>
			
		
				<td>
					<input type="text" name="sistema_operativo" value="{{$maquina->sistema_operativo}}">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('sistema_operativo') {{$message}} @enderror</td>
			</tr>

			<tr>
				<td>Ram: </td>
			
		
				<td>
					<input type="text" name="ram" value="{{$maquina->ram}}">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('ram') {{$message}} @enderror</td>
			</tr>

			<tr>
				<td>Disco duro: </td>
			
		
				<td>
					<input type="text" name="disco_duro" value="{{$maquina->disco_duro}}">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('disco_duro') {{$message}} @enderror</td>
			</tr>	

			<tr>
				<td>Programas: </td>
			
		
				<td>
					<input type="text" name="programas" value="{{$maquina->programas}}">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('programas') {{$message}} @enderror</td>
			</tr>					
			
			<tr>
		
				<td>
					<input type="hidden" name=sala_id value="{{$maquina->sala_id}}">
		
				</td>
			
			</tr>
			
			<tr>
				<td  align="center">
					
					<input type="submit" name="modificar" value="Modificar">
				</td>
				
			</tr>
			
			
			
		</table>
	</form>
	<form method="post" action="/maquinas/{{$maquina->id}}">
		
			{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">

		<input type="submit"  value="Eliminar Maquina">
		
	</form>
@endsection