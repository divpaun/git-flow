<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;

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

  public function accessSessionData(Request $request) {
        if($request->session()->exists('my_name'))
            echo $request->session()->get('my_name');
        else
            echo 'No data in the session';
   }
   public function storeSessionData(Request $request) {
      $request->session()->put('my_name','Divyesh Paun');
      echo "Data has been added to session";
   }
   public function deleteSessionData(Request $request) {
      $request->session()->forget('my_name');
      echo "Data has been removed from session.";
   }
   public function testFunc(){
   //$path =class_basename('Foo\Bar\Baz123');
    $cookie = cookie('demo_div', 'Divyesh Paun', 300);
   //$value = config('app.timezone');
   return $cookie;

    

// ['products.desk.price' => 100]
   // return $names;
    //$array = ['product' => ['name' => 'Desk', 'price' => 100]];

    //$contains = Arr::has($array, 'product.name');
    //return $contains;
   }
}

