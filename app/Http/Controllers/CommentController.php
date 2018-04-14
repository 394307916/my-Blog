<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function show(){
    	$comments = Comment::orderby('updated_at','desc')->paginate(10);

    	return view('comments.show',compact('comments'));
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required|max:50',
    		'content' => 'required|max:255',
    	]);

    	$comment = Comment::create([
    		'name' => $request->name,
    		'content' => $request->content,
    	]);

    	return redirect()->route('comment.show');
    }
}
