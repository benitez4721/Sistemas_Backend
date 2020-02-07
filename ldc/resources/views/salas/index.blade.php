@extends("../layouts.plantilla")

@section("cabecera")

MOSTRAR SALAS

@endsection

@section("contenido")
<table border="1">
	<tr>
		
		<td></td>
		<td>Nombre Sala</td>
		<td>Numero de Maquinas</td>
	</tr>	
	@foreach($salas as $sala)
	<tr>
		<td><a href="{{route('salas.edit', $sala->id)}}"/>Modificar</td>
		<td><a href='/salas/{{$sala->id}}/maquinas'/>{{$sala->Nombre_Sala}}</td>
		<td>{{$sala->numero_maquinas}}</td>
	<tr/>	
	@endforeach
<table/>
@endsection

@section("pie")