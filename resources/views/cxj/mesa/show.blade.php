@extends('cxj.layout')

@section('content')
	
    <div class="container">
		<h1 class="title">Detalle de mesa </h1> 
		<a href="/cxj/mesas">Ver Todas</a>
		<br>

			<ul> Nombre:	  {{ $mesa->nombre }} </ul>
	 		<ul> Apellido: 	  {{ $mesa->apellido }} </ul>

		<br>
		<img src="{{ asset($mesa->imagen) }}">
    </div>

@endsection
