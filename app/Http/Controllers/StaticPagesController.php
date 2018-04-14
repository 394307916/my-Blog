<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class StaticPagesController extends Controller
{
    public function home()
    {
    	$articles = Article::orderBy('updated_at','desc')
    								->take(2)
    								->get();
    	return view('static_pages.home',compact('articles'));
    }
}
