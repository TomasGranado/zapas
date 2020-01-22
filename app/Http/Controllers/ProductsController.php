<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Auth;
use DB;

class ProductsController extends Controller
{

    public function purchase(){
        $carts = DB::table('carts')->where('cart_number', '=' ,Auth::user()->id)->where('status','=','0')->update(['status' => 1]);
        return redirect('products');
    }

    public function addCart(Request $request, $id){
        $product = Product::find($id);

        $item = new Cart;
        $item->name = $product->name;
        $item->description = $product->description;
        $item->price = $product->price;
        $item->featured_img = $product->featured_img;
        $item->cant = 1;
        $item->user_id = Auth::user()->id;
        $item->product_id = $id;

         //Este lo cree para controlar si el producto fue comprado (1) o aun no ha sido producto no comprado (0).
        $item->status = 0; 
        $item->cart_number = Auth::user()->id;
        //Aquí guardo en la tabla de cart (carrito)
        $item->save();
        return redirect('products');
    }

    public function indexCart()
    {
        $cart = DB::table('carts')->where('cart_number', '=' ,Auth::user()->id)->where('status','=','0')->get();
    
        // $products = DB::table('products')->where('cart_number', '=' ,Auth::user()->id)->get();
       
        return view('cart')->with('products', $cart);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProducts()
    {
        $products = Product::all();
        return view('products')->with('products', $products);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listProducts()
    {
        $products = Product::all();
        return view('crudProducts')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
            $nombre = $request->file('img')->store('img');
            
            $product = new Product;
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->details = $request->details;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->user_id = Auth::user()->id;
            $product->featured_img = $nombre;
        
            $product->save();
            
            return view('home');
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
     * @param  string  $slug    
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product= Product::where('slug',$slug)->firstOrFail();
        return view('product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
