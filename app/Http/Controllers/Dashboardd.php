<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Dashboardd extends Controller
{
    public function index(){
        if(!Auth::user())
            return redirect('/');
        return View('admin_dashboard');
    }

    public function handleForm(Request $request){
        if (isset($request->logout)) {
            Auth::logout();
            return redirect('/');
        } elseif (isset($request->add)) {
            return redirect('/addPost');
        } elseif (isset($request->manage)) {
            return redirect('/managePosts');
        }
    }
}
