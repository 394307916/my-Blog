<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function link()
    {
    	$links = Link::orderBy('updated_at','desc')->get();

    	return view('links.home',compact('links'));
    }

    public function search(Request $request)
    {
    	$key = trim($request->sou);

    	$links = Link::where('name','like','%'.$key.'%')
    							->orderBy('updated_at','desc')
    							->get();

    	return view('links.home',compact('links'));
    }
}
