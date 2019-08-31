@extends('layouts.app')
@section('title', "Carrito")
@section('content')

<table id="cart" class="table table-hover table-condensed">
      <thead>
      <tr>
          <th style="width:50%">Product</th>
          <th style="width:10%">Price</th>
          <th style="width:8%">Quantity</th>
          <th style="width:22%" class="text-center">Subtotal</th>
          <th style="width:10%"></th>
      </tr>
      </thead>
      <tbody>

      <?php $total = 0 ?>

      @if($cart)
          @foreach($cart->products as $product)

              <?php $total += $product['price'] * $product['items'] ?>

              <tr>
                  <td data-th="Product">
                      <div class="row">
                          <div class="col-sm-3 hidden-xs"><img src="{{ $product['image'] }}" width="100" height="100" class="img-responsive"/></div>
                          <div class="col-sm-9">
                              <h4 class="nomargin">{{ $product['name'] }}</h4>
                          </div>
                      </div>
                  </td>
                  <td data-th="Price">${{ $product['price'] }}</td>
                  <td data-th="Quantity">
                      <input type="number" value="{{ $product['items'] }}" class="form-control quantity" />
                  </td>
                  <td data-th="Subtotal" class="text-center">${{ $product['price'] * $product['items'] }}</td>
                  <td class="actions" data-th="">
                      <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                      <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                  </td>
              </tr>
          @endforeach
      @endif

      </tbody>
      <tfoot>
      <tr class="visible-xs">
          <td class="text-center"><strong>Total {{ $total }}</strong></td>
      </tr>
      <tr>
          <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
          <td colspan="2" class="hidden-xs"></td>
          <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
      </tr>
      </tfoot>
  </table>

@endsection
