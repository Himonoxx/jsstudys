<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store(Request $requiest,$id){
        \Auth::user()->follow($id);
        return back();
    }
    
    public function destroy($id){
        \Auth::user()->unfollow($id);
        return back();
    }
    
    public function followings($id){
        
        
    }
    public function followers($id){
        
        
    }
}
