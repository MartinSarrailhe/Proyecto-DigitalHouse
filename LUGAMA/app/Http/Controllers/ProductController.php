<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::orderBy('name')->paginate(16);
      $categories = Category::all();

      return view('products')->with([
        'categories'=> $categories,
        'products' => $products,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function category($id)
     {

       $products = Product::where('category_id', $id)->paginate(16);
       $categories = Category::all();
       $categoria = Category::find($id);

       return view('categories')->with([
         'categories' => $categories,
         'categoria' => $categoria,
         'products' => $products,
       ]);

     }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $mightAlsoLike = Product::where('id', '!=', $id)->inRandomOrder()->take(4)->get();

        return view('product')->with([
          'product' => $product,
          'mightAlsoLike' => $mightAlsoLike,
        ]);
    }


    public function search(Request $request)
    {
      $query = $request->input('query');

      $products = Product::where('name', 'like', "%$query%")->get();
      $category = Category::where('name', 'like', "%$query%")->get();

      return view('search-results')->with([
        'products' => $products,
        'category' => $category,
      ]);
    }

    public function mother(){

      $products = Product::where('category_id', 5)->get();

      return view('mother')->with([
        'products' => $products,
      ]);

    }

    public function cpu(){

      $products = Product::where('category_id', 8)->get();

      return view('cpu')->with([
        'products' => $products,
      ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    public function buildpc($id)
    {
      $products = Product::where('category_id', $id)->get();
      $categories = Category::all();
      $categoria = Category::find($id);
      return view('buildpc')->with([
        'products' => $products,
        'categories' => $categories,
        'categoria' => $categoria,
      ]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
