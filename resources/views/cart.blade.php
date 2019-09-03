@extends('layouts.app')
@section('title', "Carrito")
@section('content')

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Producto</th>
							<th style="width:10%">Precio</th>
							<th style="width:8%">Cantidad</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($cart->products as $product)
						<tr>
							<td data-th="Product">
								<span item="name">{{ $product->name }}</span>
								<img src="{{ Storage::url($product->image) }}" class="rounded mx-auto d-block" width="60" height="60" alt="#">
							</td>
							<td data-th="Price">	<span item="price">$ {{ $product->price }}</span></td>
							<td data-th="Quantity">
								<input type="number" disabled class="form-control text-center" value="{{ $product->pivot->items }}">
							</td>
							<td data-th="Subtotal" class="text-center">$ {{ $product->pivot->total_price }} </td>
							<td class="actions" data-th="">

								<form method = "get" action = "/cart/edit/{{ $product->id }}" >
									 @csrf
								<button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
								</form>
								<form method = "post" action = "/cart/{{ $product->id }}" >
									 @csrf
									 @method('delete')
								<button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
								</form>
							</td>
						</tr>
						@endforeach

					</tbody>
					<tfoot>
						<tr>
							<td><a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center">
								<strong>Total $
									{{ $cart->products->sum('pivot.total_price') }}
								</strong>
							</td>
							<td><a href="/final" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

@endsection
