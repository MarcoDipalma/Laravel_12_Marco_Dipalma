<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=Tag::all();
        return view('article.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $img = null;
        
        if($request->file('img')){
            $img=$request->file('img')->store('img', 'public');
        }

        $article = Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'img'=>$img
        ]);

        $article->tags()->attach($request->tags);

        return redirect()->route('home')->with('status', 'Operazione andata a buon fine');


    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {        
        if($request->file('img')){
            $img=$request->file('img')->store('img', 'public');
        }
        else{
            $img=$article->img;
        }

        $article->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'img'=>$img,
        ]);

        return redirect()->route('article.index')->with('status', 'Operazione andata a buon fine');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->with('status', 'Articolo eliminato con successo');
        
    }
}
