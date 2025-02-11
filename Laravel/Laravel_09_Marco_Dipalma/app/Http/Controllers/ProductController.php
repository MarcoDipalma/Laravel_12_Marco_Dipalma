<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function form() {
        return view('form');
    }

    public function store(Request $request){
        // dd($request->all());

        // $name = $request->name;
        // $price = $request->price;
        // $product = new Product();
        // $product->name = $name;
        // $product->price = $price;

        // $product->save();


        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        // dd($product);
        return redirect()->route('home')->with('status', 'Operazione andata a buon fine');

    }

    public function index(){
        $products = Product::all();
        // $product->save();
        return view('index', ['products' => $products]);
    }
}
