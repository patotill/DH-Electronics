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
        $productToShow = Product::find($id);
  			return view('products-show', compact('productToShow'));
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
          $productToDelete->delete();

           return redirect()->route('home')->with([
             'msj'=>'El producto ha sido eliminado satisfactoriamente'
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

			$productToUpdate->name = $request->input('name');
			$productToUpdate->price = $request->input('price');
			$productToUpdate->description = $request->input('description');
			$productToUpdate->category_id = $request->input('category_id');
      $productToUpdate->stock = $request->input('stock');
      $productToUpdate->brand_id = $request->input('brand_id');


      // $nombreImagen = uniqid('img-') . '.' . $image->extension();
      // $image->storePubliclyAs('public/', $nombreImagen);

      if ($request->hasFile('image')) {
        $productToUpdate->image = $request->file('image')->store('public/images/fotosDH');
      }

      $productToUpdate->save();


			$saved = $productToUpdate->save();

      return redirect()->route('productShow', $id)->with([
        'saved' => $saved,
        'msj'=>'El producto ha sido eliminado satisfactoriamente'
      ]);
			// return redirect('/products');
    }

    public function cart()
       {
           return view('cart');
       }

    public function addToCart($id)
        {
            $product = Product::find($id);

            if(!$product) {

                abort(404);

            }

            // if cart is empty then this the first product
            if(!$cart) {

                $cart = [
                        $id => [
                            "name" => $product->name,
                            "quantity" => 1,
                            "price" => $product->price,
                            "photo" => $product->image
                        ]
                ];

                session()->put('cart', $cart);

                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {

                $cart[$id]['quantity']++;

                session()->put('cart', $cart);

                return redirect()->back()->with('success', 'Product added to cart successfully!');

            }

            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
     }




}
