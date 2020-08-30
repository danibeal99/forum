<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePost;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view ('posts/index', compact ('posts'));
    }

    public function create()
    {
        return view ('posts/createpost');
    }

    public function store(StorePost $request)
    {
        foreach ($request->post as $post)
        
        {$post =  Post::create([

            'title'       => $request->input('post'),
            'body'   => $request->input('post'),
            'user_id'   =>  Auth::user(),



        ]);

        $post->save();

        }


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $post = Post::find($id);

        return view('posts/show',compact ('post'));

    }


    public function edit(Post $post)
    {
        // edit a post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // delete a post
    }
}



//