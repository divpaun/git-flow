<?php

use Illuminate\Http\Request;
use App\Http\Resources\ProjectsCollection;
use App\Product;
use App\Project;
use App\Http\Resources\ProductResourse;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products/{product}', function(Product $product) {
    return new ProductResourse($product);
});

Route::get('/products', function() {
    
     return ProductResourse::collection(Product::all());
});

Route::get('/projects', function () {
    return new ProjectsCollection(Project::paginate());
});

/*Route::get('/products123', function() {
    return new \ProductsCollection(Product::all());
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});







