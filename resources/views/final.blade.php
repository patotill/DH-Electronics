@extends('layouts.app')
@section('title', "Compra Finalizada")
@section('content')

  <h1 class="font-italic"> -- GRACIAS POR SU COMPRA -- </h1>

  <html lang="es" dir="ltr">
<div class="card-body" style="text-align:justify;">
    <form action="/" method="get">
        @csrf
      <p>Su compra ha sido confirmada!</p>

      <p>Nuestro equipo comercial se contactará para programar el pago y la entrega de los productos.</p>

      <button class="btn btn-success"> Volver al inicio
    </form>


</div>


@endsection
