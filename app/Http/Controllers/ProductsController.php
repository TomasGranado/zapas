<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProducts()
    {
        $products = Product::all();
        $random = $products->shuffle();
        $random->all();
        return view('products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
            $product = new Product;
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->details = $request->details;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->user_id = Auth::user()->id;
            //$product->featured_img = $request->featured_img;
            $product->save();
            
            return view('index');
          
    }

    public function storeCart(Request $request)
    {
        $product = Product::find($request->id);
        //Esto lo hago la lograr generar un numero de carrito de forma dinámica
        
        $item = new Cart;
        $item->name = $product->name;
        $item->description = $product->description;
        $item->details = $product->details;
        $item->user_id = Auth::user()->id;
        $item->price = $product->price;
        $item->featured_img = $product->featured_img;
        $item->cant = 1;
        
        $item->user_id = Auth::user()->id;
        //Este lo cree para controlar si el producto fue comprado (1) o aun no ha sido producto no comprado (0).
        $item->status = 0; 
        //Aquí guardo en la tabla de cart (carrito)
        
        $item->save();
        return redirect('home');
    }

    
    public function viewProduct(Request $request)
    {
        dd($request);
        $products = Product::all();
        $random = $products->shuffle();
        $random->all();
        return view('products')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
