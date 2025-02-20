<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;

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
            return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        // dd(Auth::user()->id);
        
        $title = $request->title;
        $subtitle = $request->subtitle;
        $body = $request->body;
        $img = null;
        
        if($request->file('img')){
            $img=$request->file('img')->store('img', 'public');
        }



        $article = Article::create([
            'title' => $title,
            'subtitle' => $subtitle,
            'body' => $body,
            'img'=>$img,
            'user_id'=> Auth::user()->id
        ]);

        // dd($product);
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
    public function update(ArticleEditRequest $request, Article $article)
    {
        $article->update([
            $article->title = $request->title,
            $article->subtitle = $request->subtitle,
            $article->body = $request->body
        ]);

        if($request->img){
            $article->update([
                $article->img = $request->file('img')->store('img', 'public') 
            ]);
        }
        return redirect()->route('home')->with('status', 'Operazione andata a buon fine');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('home')->with('status', 'Operazione andata a buon fine');
    }
}
