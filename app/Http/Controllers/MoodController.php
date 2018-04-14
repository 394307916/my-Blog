<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mood;

class MoodController extends Controller
{
    public function show()
    {
    	$moods = Mood::orderBy('created_at','desc')->paginate(10);

    	return view('moods.show',compact('moods'));
    }
}
