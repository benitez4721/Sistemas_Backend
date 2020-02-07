@extends("../layouts.plantilla")

@section("cabecera")

INGRESAR MAQUINA

@endsection

@section("contenido")
	<form method="post" action="/maquinas">
	
	
		<table>
			<tr>
				<td>Ip: </td>
			
		
				<td>
					<input type="text" name="ip">
					
		
					{{csrf_field()}}
				</td>
			</tr>		
			
			<tr>
				<td style="color: red">@error('ip') {{$message}} @enderror</td>
			</tr>
			
			<tr>
				<td>Sistema Operativo: </td>
			
		
				<td>
					<input type="text" name="sistema_operativo">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('sistema_operativo') {{$message}} @enderror</td>
			</tr>

			<tr>
				<td>Ram: </td>
			
		
				<td>
					<input type="text" name="ram">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('ram') {{$message}} @enderror</td>
			</tr>

			<tr>
				<td>Disco duro: </td>
			
		
				<td>
					<input type="text" name="disco_duro">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('disco_duro') {{$message}} @enderror</td>
			</tr>

			<tr>
				<td>Programas: </td>
			
		
				<td>
					<input type="text" name="programas">
		
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('programas') {{$message}} @enderror</td>
			</tr>

			<tr>
		
				<td>
					<input type="hidden" name=sala_id value="{{$id}}">
		
				</td>
			</tr>
			<tr>
				<td  align="center">
					
					<input type="submit" name="enviar" value="Enviar">
				</td>
				
			</tr>
			
			
			
		</table>
	</form>

@endsection