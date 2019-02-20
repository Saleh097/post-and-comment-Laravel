<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Posts;

class Postss extends Controller
{
    public function index(){
        return View('add_post');
    }

    public function handleForm(Request $request){
        if (isset($request->logout)) {
            Auth::logout();
            return redirect('/');
        } elseif (isset($request->return)) {
            return redirect('/dashboard');
        } elseif (isset($request->manage)) {
            return redirect('/managePosts');
        }

        if(isset($request->post)){
            $post = new Posts();
            $post->user_id = Auth::user()->id;
            $post->title = $request->contentTitle;
            $post->content = $request->contentText;
            $post->save();
            return redirect('/addPost');
        }
    }
}
