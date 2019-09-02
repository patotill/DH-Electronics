@extends('layouts.app')
@section('title', "Carrito")
@section('content')

<div class="container">
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


						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"></div>
									<div class="col-sm-10">
										<h4 class="nomargin"></h4>

										{{--  @foreach (session()->get('cart') as $product) --}}

												<p>
													<span item="name">{{ $product->name }}</span>
													<span item="price">{{ $product->price }}</span>
													<img src="{{ Storage::url($product->image) }}" class="rounded mx-auto d-block" width="60" height="60" alt="#">
												</p>

										{{-- @endforeach --}}

									</div>
								</div>
							</td>
							<td data-th="Price"></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center"></td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>


					</tbody>
					<tfoot>
						<tr>
							<td><a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total </strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

@endsection
