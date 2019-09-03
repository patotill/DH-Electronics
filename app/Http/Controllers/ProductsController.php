<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('/products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::orderBy('id')->get();
      $brands = Brand::orderBy('id')->get();
      return view('products-create-form', compact('categories', 'brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $formNewProd)
    {
      // Validación de Campos
			$formNewProd->validate([
				'name' => 'required | string',
        'description' => 'string',
				'price' => 'required | numeric',
				'image' => 'required | image', // image = .jpg | .jpeg | .png | .svg | .bmp | .gif
			], [
				// 'required' => 'El campo :attribute es obligatorio',
				'name.required' => 'El campo :name es obligatorio',
				'price.required' => 'El rating es obligatorio',
				'image.required' => 'La imagen es obligatoria',
			]);


			// Forma de guardar #2 - create() guarda en DB y retorna el objeto que acabamos de guardar
 			$productSaved = Product::create($formNewProd->all());

			// Pedimos el campo que tiene la imagen
			$image = $formNewProd->file('image')->store('public/images/fotosDH');

			$productSaved->image = $image;

			$productSaved->save();


			return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = session()->get('cart');
        $selectedProductsId = $cart->products->pluck('id');
        $productToShow = Product::find($id);
        return view('products-show', compact('productToShow', 'selectedProductsId','cart'));

    }





        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
          $productToDelete = Product::find($id);
          $delete = $productToDelete->delete();

           return redirect()->route('home')->with([
             'delete'=> $delete
           ]);

          // <a href={{ URL::previous() }} class="btn btn-success">Volver atras</a>

        }

        public function category($id, $name)
        {
            $productsByCategory = Product::where('category_id', $id)->get();
            return view('/categorias', compact('productsByCategory'));
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $productToEdit = Product::find($id);

      $this->authorize('update', $productToEdit);

      $categories = Category::orderBy('id')->get();
      $brands = Brand::orderBy('id')->get();
      return view('products-edit-form', compact('productToEdit', 'categories', 'brands'));
    }


    public function update(Request $request, $id)
    {
      $productToUpdate = Product::find($id);

      if ($request->hasFile('image')) {
        $productToUpdate->image = $request->file('image')->store('public/images/fotosDH');
      }

			$saved = $productToUpdate->update($request->all());

      return redirect()->route('productShow', $id)->with([
        'saved' => $saved,
      ]);
			// return redirect('/products');
    }


}
