@extends('layouts.appAdmin')

@section('content')
<h1>Agregar Sala</h1>
	<form method="post" action="/salas">


		<table>
			<tr>
				<td>Nombre: </td>


				<td>
					<input type="text" name="Nombre_Sala">


					{{csrf_field()}}
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('Nombre_Sala') {{$message}} @enderror</td>
			</tr>
			<tr>
				<td>Cantidad de Maquinas: </td>


				<td>
					<input type="text" name="numero_maquinas">

				</td>

			</tr>
			<tr>
				<td style="color: red">@error('numero_maquinas') {{$message}} @enderror</td>
			</tr>
			
			<tr>
				<td  align="center">

					<input type="submit" name="enviar" value="Enviar">
				</td>

			</tr>



		</table>
	</form>
<!--<ul>
	@if(count($errors)>0)

		@foreach($errors->all() as $error)

	<li>{{$error}}</li>

		@endforeach
	@endif
</ul>-->
@endsection
