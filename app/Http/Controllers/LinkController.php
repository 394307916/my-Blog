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
}
