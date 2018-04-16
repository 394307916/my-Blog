<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Mail;

class CommentController extends Controller
{
    public function show(){
    	$comments = Comment::orderby('updated_at','desc')->paginate(7);

    	return view('comments.show',compact('comments'));
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
           return redirect()->route('comment.show');
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


