<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user){
        $count_posts = $user->posts()->count();
        $count_following = $user->followings()->count();
        $count_followers = $user->followers()->count();
        
        return [
            'count_posts'=>$count_posts,
            'count_following'=>$count_following,
            'count_followers'=>$count_followers,
            ];
        
    }
    
    
    
}
