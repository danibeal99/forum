<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 

{
    public $fillable = array('CommentTitle', 'CommentBody', 'user_id');

    public function user()
    {
        return $this->belongsTo('User');
        
    }

    public function post()
    {
        return $this->belongsTo('User');
        
    }

    protected $primaryKey = 'comment_id';
}
    