<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlePagesController extends Controller
{
    public function index()
    {
    	$articles = Article::orderBy('updated_at','desc')->paginate(10);				    							
    	return view('articles.home',compact('articles'));
    }

    public function show(Article $article)
    {
    	return view('articles.show',compact('article'));
    }

    public function search(Request $request)
    {
    	$key = trim($request->value);
    	$articles = Article::where('title','like','%'.$key.'%')
    							->orderBy('updated_at','desc')
    							->get();

    	return $articles;
    }
}
