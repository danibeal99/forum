<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model 

{
    public $fillable = array('title', 'body', 'user_id');

    public function user()
    {
        return $this->belongsTo('User');  
        
    }

    public function Comment()
    {
        return $this->hasMany('App\Comment');
    }


    
}
    

