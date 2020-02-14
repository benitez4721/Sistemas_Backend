@extends('layouts.appAdmin')

@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Rango</th>
    </tr>
  </thead>
  <tbody>
    @foreach($preparadores as $preparador)
        <tr>
            <th scope="row">{{$preparador->id}}</th>
            <td>{{$preparador->name}}</td>
            <td>{{$preparador->last_name}}</td>
            <td>{{$preparador->email}}</td>
            <td>{{$preparador->rank}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
