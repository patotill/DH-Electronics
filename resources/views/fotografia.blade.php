@extends('layouts.app')
@section('title', "Preguntas Frecuentes")
@section('content')

<div class="containerProductos" id="containerProductos" style="">

  <div class="rowProductos d-md-flex flex-md-equal">

    <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center' >
      <img src="/images/fotosDH/nikon_d850.jpg" class="img-fluid w-50 h-50" alt="parlante">
      <br><p>Nikon D850</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>
  <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center'>
      <img src="/images/fotosDH/nikon_d7500.jpg" class="img-fluid w-50 h-50" alt="fotografia">
      <br><p>Nikon D7500</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary" href = "fotografia.php"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>

  <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center'>
      <img src="/images/fotosDH/sony_a7r_iv.jpg" class="img-fluid w-50 h-50" alt="dron">
      <br><p>Sony alpha a7R IV</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>

  <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center'>
      <img src="/images/fotosDH/sony_a7r_iv.jpg" class="img-fluid w-50 h-50" alt="celulares">
      <br><p>Sony alpha a7R IV</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>
</div>
<br><br>

<div class="rowProductos d-md-flex flex-md-equal">
  <div class="col-md-3 text-center overflow-hidden">
  <div class="fotos" style='align:center;text-align:center'>
    <img src="/images/fotosDH/sony_alpha_a6400.jpg" class="img-fluid w-50 h-50" alt="Gamming">
    <br><p>Sony Alpha a6400</p>
    <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
  </div>
</div>

<div class="col-md-3 text-center overflow-hidden">
  <div class="fotos" style='align:center;text-align:center'>
    <img src="/images/fotosDH/sony_cyber.jpg" class="img-fluid w-50 h-50" alt="Accesorios">
    <br><p>Sony Cyber-shot DSC-RX100 VII</p>
    <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary" href = "fotografia.php"><span style="font-size: 15px">Comprar</span></button>
  </div>
</div>
</div>
@endsection
