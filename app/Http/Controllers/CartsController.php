<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\User;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if (!auth()->id()) {   
        
        return redirect()->route('login')->with(['mensaje'=>'Para comprar, debe loguearse']);

        } elseif (!session()->has('cart')) {
        
        $cart = Cart::create();
        
        $cart = session()->put('cart', $cart);
        $product = Product::find($id);
        
        /*$cart->products()->attach($id, ['items'=>2,'product_price' => $product->price, 'total_price'=> ($product->price)]);*/

        return view('cart', compact('cart', 'product'));

        } else {
        $product = Product::find($id);
        $cart = session()->get('cart');
        $cart->products()->attach($id, ['items'=>1,'product_price' => $product->price, 'total_price'=> ($product->price)]);
        return view('cart', compact('cart', 'product'));

        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cart = session()->get('cart');
        $product = Product::find('all');
        return view('cart', compact('cart', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$product = Product::find($id);
        $cart->products()->detach($id, ['items'=>2,'product_price' => $product->price, 'total_price'=> ($product->price * $product->items)]);*/
    }
}
