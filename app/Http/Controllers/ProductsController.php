<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use App\User;

use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewProductsView()
    {

        $product = Product::with(array(
            'user',
            'subMenu' => function($query) {
                $query->where('deleted', 0);
            }))->get();
        $collection = collect($product);
        $filtered = $collection->reject(function ($name) {
            return $name->deleted == 1;

            //   }) ->sortBy('sort_order');
        }) ->sortBy('sort_order');

      //  return $filtered;
        return view ('productsViewAdmin', compact('filtered'));


   //     return 'products';
//return $filtered;
    }


    public function addProductsView()
    {
        return view ('productsAddAdmin');
    }


    public function addProductsInsert(Request $request)

    {
        $this->validate($request, [
            'product_name' => 'required'
        ]);
        $product = new Product($request->all());
        $product->user_id = Auth::id();
        $product->save();
        return \Redirect::to('/productsViewAdmin');

    }


    public function editProduct(Product $id)
    {
        return view('productsEditAdmin', compact('id'));
    }


    public function updateProduct(Request $request, Product $id)
    {
        $id->update($request->all());
        return \Redirect::to('/productsViewAdmin');
    }

    //
}
