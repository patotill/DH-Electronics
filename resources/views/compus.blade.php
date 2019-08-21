@extends('layouts.app')
@section('title', "Computadoras")
@section('content')

<div class="containerProductos" id="containerProductos" style="">
<!-- primer producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/fotosDH/asus.jpg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h4><a href="#" class="link">
          <span itemprop="brand">ASUS</span>
          <span itemprop="name">modelo</span>
        </a></h4>
      </div>
      <div class="sect">
        <div class="descripcion">
          <h3>Descripcion</h3>
          <ul class="text-left">
            <li>compu algo</li>
            <li>2da desc</li>
            <li>3ra desc</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden" style="vertical-align:middle;">
    <!-- <br><br> -->
    <div class="prices text-center"><span class="price-you-pay bold">$37000</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

<!-- SEGUNDO producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/fotosDH/lenovo_.jpg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h4><a href="#" class="link">
          <span itemprop="brand">LENOVO</span>
          <span itemprop="name">modelo</span>
        </a></h4>
      </div>
      <div class="sect">
        <div class="descripcion">
          <h3>Descripcion</h3>
          <ul class="text-left">
            <li>compu algo</li>
            <li>2da desc</li>
            <li>3ra desc</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">$25000</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

<!-- TERCER producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/fotosDH/lenovo.jpg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h4><a href="#" class="link">
          <span itemprop="brand">LENOVO</span>
          <span itemprop="name">modelo 2</span>
        </a></h4>
      </div>
      <div class="sect">
        <div class="descripcion">
          <h3>Descripcion</h3>
          <ul class="text-left">
            <li>compu algo</li>
            <li>2da desc</li>
            <li>3ra desc</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">$24000</span></div>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

<!-- 4to producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/fotosDH/macbookAir.jpg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h4><a href="#" class="link">
          <span itemprop="brand">Macbook Air</span>
          <span itemprop="name">modelo 2017</span>
        </a></h4>
      </div>
      <div class="sect">
        <div class="descripcion">
          <h3>Descripcion</h3>
          <ul class="text-left">
            <li>compu algo</li>
            <li>2da desc</li>
            <li>3ra desc</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">$50000</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>








</div>


      <!-- <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>
  <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center'>
      <img src="/images/fotosDH/lenovo_.jpg" class="img-fluid rounded w-50 h-50" alt="fotografia">
      <br><p>Lenovo</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary" href = "fotografia.php"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>

  <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center'>
      <img src="/images/fotosDH/macbookAir.jpg" class="img-fluid w-50 h-50" alt="dron">
      <br><p>Macbook Air</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>

  <div class="col-md-3 text-center overflow-hidden">
    <div class="fotos" style='align:center;text-align:center'>
      <img src="/images/fotosDH/microsoft-13.jpg" class="img-fluid w-50 h-50" alt="celulares">
      <br><p>Microsoft-13</p>
      <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
    </div>
  </div>
</div>
<br><br>

<div class="rowProductos d-md-flex flex-md-equal">
  <div class="col-md-3 text-center overflow-hidden">
  <div class="fotos" style='align:center;text-align:center'>
    <img src="/images/fotosDH/microsoft.jpg" class="img-fluid w-50 h-50" alt="Gamming">
    <br><p>Microsoft</p>
    <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary"><span style="font-size: 15px">Comprar</span></button>
  </div>
</div>

<! <div class="col-md-3 text-center overflow-hidden">
  <div class="fotos" style='align:center;text-align:center'>
    <img src="/images/fotosDH/sony_cyber.jpg" class="img-fluid w-50 h-50" alt="Accesorios">
    <br><p>Sony Cyber-shot DSC-RX100 VII</p>
    <button style= "width: auto; border-radius: 20px; font-size: 12px;" type="button" class="btn btn-outline-secondary" href = "fotografia.php"><span style="font-size: 15px">Comprar</span></button>
  </div>
</div>
</div> -->
@endsection
