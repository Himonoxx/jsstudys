<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jsstudy extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
        
    }
    
    protected $fillable = ['imagepath', 'user_id'];
    
    protected $table = 'jsstudys';
}
