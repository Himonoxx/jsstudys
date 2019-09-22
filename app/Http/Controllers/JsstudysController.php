<?php

namespace App\Http\Controllers;
use App\Jsstudy;

use Illuminate\Http\Request;
use Storage;
use App\User;
use App\Post;
use App\Word;


class JsstudysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){
            $post_create = new Post;
            $all_users = User::orderBy('created_at','desc')->paginate(10);
            
            $user=\Auth::user();
            $posts=$user->feed_posts()->orderBy('created_at', 'desc')->paginate(5);
            
        
            return view('jsstudys.index',[
            'posts' => $posts,
            'posts_create' => $post_create,
            'user'=>$user,
            'all_users'=>$all_users,
            ]);
            
        }
        
        return view('jsstudys.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function upload_page()
    {
        
        $jsstudy=new Jsstudy;
        return view('jsstudys.upload',[
            'jsstudy' => $jsstudy
            ]);
        
        
    }
    
    public function photolib()
    {
        $user=\Auth::user()->id;
        $jsstudys=Jsstudy::all()->where('user_id',$user);
        
       return view('jsstudys.photolib',[
           'jsstudys'=>$jsstudys
           ]); 
       
    }
    
    public function upload(Request $request)
    {
        
        $file=$request->file('file');
        $path=Storage::disk('s3')->putFile('/',$file,'public');
        $imagep=Storage::disk('s3')->url($path);
        $request->user()->jsstudys()->create([
            'imagepath' => $imagep,
            'user_id' => $request->user()->id
            ]);
        
        
        return view('jsstudys.upload');
        
        
    }
    
    public function omikuji()
    {
        return view('jsstudys.omikuji');
    }
    
    public function typing()
    {
        $words = Word::all();
        foreach($words as $word){
            $words_eng[$word->word] = $word->mean;
        }
        $words_eng = json_encode($words_eng);
        return view('jsstudys.typing',['words_eng'=>$words_eng]);
    }
    
    public function tests(){
        
        return view('jsstudys.tests');
    }
}
