@extends('layouts.tienda.principal')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">{{ $informacion->titulo }}</h1>
            <br>
            <p>{!! $informacion->descripcion !!}</p>
        </div>
    </div>
</div>
@endsection




