@extends("../layouts.plantilla")

@section("cabecera")

MAQUINAS

@endsection

@section("contenido")
<table border="1">
	<tr>
		
		<td></td>
		<td>Nro</td>
		<td>Ip</td>
		<td>Sistema Operativo</td>
		<td>Ram</td>
		<td>Disco Duro</td>
		<td>Programas</td>

		<td>Numero de Maquinas</td>
	</tr>	
	@foreach($maquinas as $maquina)
	<tr>
		<td>Modificar</td>
		<td>{{$maquina->id}}</td>
		<td>{{$maquina->ip}}</td>
		<td>{{$maquina->sistema_operativo}}</td>
		<td>{{$maquina->ram}}</td>
		<td>{{$maquina->disco_duro}}</td>
		<td>{{$maquina->programas}}</td>
	<tr/>	
	@endforeach
<table/>
@endsection

@section("pie")