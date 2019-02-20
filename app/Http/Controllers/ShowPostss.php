<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use PHPUnit\Util\RegularExpression;
use App\Posts;
use App\Comments;

class ShowPostss extends Controller
{
    public function index(){
        $contents = array();
        $posts = Posts::all();
        $i=0;
        foreach ($posts as $post){
            $contents[$i]['post'] = $post;
            $contents[$i]['comments'] = Comments::where('post_id',$post->id)->get();
            $i++;
        }
//            return $contents;
        return View('posts')->with('contents',$contents);
    }

    public function handleForm(Request $request){
        if(!Auth::user())
            return redirect('/');
        if(isset($request->logout)){
            Auth::logout();
            return redirect('/');
        }
        elseif (isset($request->sendComment)){
            $comment = new Comments();
            $comment->post_id = $request->pid;
            $comment->user = Auth::user()->name;
            $comment->content = $request->comment_text;
            $comment->save();
        }
        return redirect('/showPosts');
    }
}
