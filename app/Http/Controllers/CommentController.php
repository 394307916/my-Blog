<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Mail;
use App\Mood;

class CommentController extends Controller
{
    public function show(){
    	$comments = Comment::orderby('updated_at','desc')->paginate(6);
      $moods = Mood::orderBy('created_at','desc')->get();

    	return view('moods.show',compact('comments','moods'));
    }

    public function store(Request $request){
        //$request->session()->flush();
        if($request->session()->has('comment')){
            session()->flash('danger','您提交过于频繁');
            return redirect()->back();

       }else{
            $this->validate($request,[
              'name' => 'required|max:50',
              'content' => 'required|max:255',
          ]);

           $comment = Comment::create([
              'name' => $request->name,
              'content' => $request->content,
          ]);
           $this->sendEmailTo($comment);
           session(['comment' => 'comment']);
           return redirect()->route('moods.show');
       }
   }

    protected function sendEmailTo($comment)
    {
        $view = 'email.notice';
        $data = compact('comment');
        $to = '394307916@qq.com';
        $subject = "博客有一条新留言";

        Mail::send($view, $data, function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
    }
}


