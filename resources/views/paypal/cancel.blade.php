@extends('/plantilla/layout')

{{-- Colocar una seccion por cada yiel agregado en la plantilla --}}

{{-- section para titulo, este solo el texto, NO REQUIERE el endsection --}}
@section('titulo','- Pedidos')
    

{{-- setiono para el contenido  con componentes --}}
@section('contenido')

<div class="container">
    <h2>Pago cancelado</h2>
    <p>No se ha realizado ningún cargo.</p>
    <a href="{{ url('/') }}">Volver al inicio</a>
</div>


@endsection