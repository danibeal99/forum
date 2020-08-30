<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 

{
    public $fillable = array('title', 'body');

    public function user()
    {
        return $this->belongsTo('User');
        
    }
}
    

