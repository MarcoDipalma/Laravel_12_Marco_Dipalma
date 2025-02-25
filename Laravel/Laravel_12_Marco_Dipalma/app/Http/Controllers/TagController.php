<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(){
        return view('tag.create');
    }

    public function store(Request $request){

        $request->validate([
            'tag'=>'required'
        ]);

        Tag::create([
            'tag'=>$request->tag
        ]);

        return redirect()->route('home')->with('status', 'Tag creato con successo');

    }

    public function index(){
        $tags=Tag::all();

        return view('tag.index', compact('tags'));
    }

    public function show(Tag $tag){

        return view('tag.show', compact('tag'));
    }

}