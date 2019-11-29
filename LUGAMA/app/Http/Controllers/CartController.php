<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cart = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();

      $total = 0;
      foreach ($cart as $item) {
          $total = $total +($item->quantity * $item->price);
      }

      return view('cart', compact('cart', 'total'));
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
    public function store(Request $request)
    {
      $product = Product::find($request->id);
      $item = new Cart;
      $item->name = $product->name;
      $item->description = $product->description;
      $item->price = $product->price;
      $item->featured_img = $product->featured_img;
      $item->quantity = 1;
      $item->user_id = Auth::user()->id;
      $item->status = 0; //producto no comprado.
      $item->cart_number = 0;
      $item->save();
      return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item = Cart::where('id',$id)
      ->where('user_id',Auth::user()->id)
      ->where('status',0)->get(); //La consulta nos devuelve un array de datos con 1 solo item.
      $item[0]->delete(); //El item está en la posición 0 del array. Lo eliminamos.

      return redirect('/cart');
    }

    public function cartclose(Request $req){
      //traigo todos los productos del carrtito del usuario logueado.
      $items = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
      $cart_number = Cart::max('cart_number') + 1;
      foreach($items as $item){
        $item->status = 1;
        $item->cart_number = $cart_number;
        $item->save();
      }
      return view('/thankyou');
    }


    public function history(){
      $carts = Cart::where('user_id', Auth::user()->id)
                    ->where("status",1)->get()
                    ->groupBy('cart_number'); //todos los nros de carrito del usuario.
      return view('history', compact('carts'));
    }

}
