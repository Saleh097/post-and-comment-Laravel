<?php

namespace App\Http\Controllers;

use App\Comments;
use App\User;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class managePostss extends Controller
{
    public function index(){
        if(Auth::user()->name == 'admin'){
            $contents = array();
            $posts = Posts::all();
            $i=0;
            foreach ($posts as $post){
                $contents[$i]['post'] = $post;
                $contents[$i]['comments'] = Comments::where('post_id',$post->id)->get();
                $i++;
            }
//            return $contents;
            return View('manage_posts')->with('contents',$contents);
        }
        else
            return redirect('/');
    }

    public function handleForm(Request $request){
        if(isset($request->removePost)){
            $post = Posts::find($request->pid);
            $post->delete();
        }
        elseif (isset($request->removeComment)){
            $comment = Comments::find($request->cid);
            $comment->delete();
        }
        elseif (isset($request->sendComment)){
            $comment = new Comments();
            $comment->post_id = $request->pid;
            $comment->user = Auth::user()->name;
            $comment->content = $request->comment_text;
            $comment->save();
        }
        return redirect('/managePosts');
    }
}
