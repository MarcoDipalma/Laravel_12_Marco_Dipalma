<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function form() {
        return view('form');
    }

    public function store(ProductRequest $request){
        // dd($request->all());

        $name = $request->name;
        $price = $request->price;
        $img = null;
        
        if($request->file('img')){
            $img=$request->file('img')->store('img', 'public');
        }



        $product = Product::create([
            'name' => $name,
            'price' => $price,
            'img'=>$img,
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
