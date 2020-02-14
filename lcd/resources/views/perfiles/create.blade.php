@extends('layouts.app')

@section('content')
<h1>Crear Perfil</h1>
	<form method="post" action="/perfil">


		<table>
			<tr>
				<td>Nombre: </td>
				<td>
					<input type="text" name="Nombre_Preparador">
					{{csrf_field()}}
				</td>
			</tr>

			<tr>
				<td style="color: red">@error('Nombre_Preparador') {{$message}} @enderror</td>
			</tr>
			<tr>
				<td>Apellido: </td>
				<td>
					<input type="text" name="Apellido_Preparador">
				</td>

			</tr>
			<tr>
				<td style="color: red">@error('Apellido_Preparador') {{$message}} @enderror</td>
            </tr>

            <tr>
				<td>Email: </td>
				<td>
					<input type="text" name="Email">
				</td>

			</tr>
			<tr>
				<td style="color: red">@error('Email') {{$message}} @enderror</td>
            </tr>

            <tr>
				<td>Rango: </td>
				<td>
					<input type="text" name="Rango">
				</td>

			</tr>
			<tr>
				<td style="color: red">@error('Rango') {{$message}} @enderror</td>
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
