<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\User;

class CartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
  
      $product = Product::find($id);

      $cart = session('cart');

      $cart->products()->attach($id, [
       'items'=>1,
       'product_price' => $product->price,
       'total_price'=> $product->price
      ]);

      session()->put('cart', $cart->fresh());

      return redirect('/cart');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       $cart = session()->get('cart')->fresh();

       return view('cart', compact('cart'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function edit($id)
    {
      $cart = session()->get('cart');

      $product = $cart->products->where('id', $id)->first();

      return view('cart-edit-form', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cart = session()->get('cart');

      $product = $cart->products->where('id', $id)->first();

      $cart->products()->syncWithoutDetaching([$id => [
        'items' => $request->get('quantity'),
        'total_price' => $request->get('quantity') * $product->price,
      ]
      ]);

      session()->put('cart', $cart);

      return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = session()->get('cart');
        $product = Product::find($id);
        $cart->products()->detach($id);
        return redirect('/cart');
    }
}
