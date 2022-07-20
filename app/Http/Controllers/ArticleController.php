<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    
    public function index()
    {
        return Article::all();
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $article = Article::create($request->all());
          return $article; 
    }

   
    public function show($id)
    {
          $article = Article::findOrFail($id);
                 return $article;
    }

 
    public function edit(Article $article)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
           return $article;
    }

    
    public function destroy($id)
    {
        return Article::destroy($id);
    }
}
