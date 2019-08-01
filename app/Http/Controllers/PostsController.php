<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index(){
        if(Auth::check()){
            
        $user=\Auth::user();
        $posts=$user->posts();
        
        return view('jsstudys.index',[
            'posts' => $posts
            ]);
            
        }
        
        return view('jsstudys.index');
        
        
    }
    
    public function store(Request $request){
        
        $this->validate($request, [
            'memo' => 'required|max:191',
        ]);

        $request->user()->posts()->create([
            'memo' => $request->memo,
            'user_id'=>$request->id
        ]);
        
        return redirect()->action('JsstudysController@index');
        
    }
}
