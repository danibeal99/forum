<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComment extends FormRequest
{
    public function rules()
    {
        return [
            //
            'comment.CommentTitle' => 'string|max:30|nullable',
            'comment.CommentBody' => 'string|max:255|nullable',
            
        ];
    }
}
