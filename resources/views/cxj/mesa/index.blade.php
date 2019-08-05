@extends('cxj.layout')

@section('content')
<div class="container">	
<h1  class="display-3">Mesas</h1>


@foreach ($mesas as $mesa)

<li>
	<a href="/cxj/mesas/{{ $mesa->id }}">{{ $mesa->nombre }}</a>
</li> 

@endforeach

</div>

@endsection