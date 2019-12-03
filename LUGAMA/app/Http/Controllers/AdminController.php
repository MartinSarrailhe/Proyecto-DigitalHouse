<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('addproduct');
    }

    public function createProduct(Request $request)
    {
        if ($request->hasFile('featured_img')) {
          $file = $request->file('featured_img');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/img/', $name);
        }
      // dd($request);
        $product = new Product;

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->featured_img = $name;
        $product->save();

        return redirect('home');
    }
}
