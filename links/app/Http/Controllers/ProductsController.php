<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(){
	$products = Product::all();
	

    return view('products.create',compact('products'));
    }

    

    public function store(Request $request)
    {
       
     


       $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);
 
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
 
        return redirect('/products')->with('message', 'Product created successfully');
    }

    public function show(){
         return response()->json([
        'data' => [
            'title' => $book->title,
            'description' => $book->description,
            'author' => $book->author->name
        ]
    ]);
    }
}

