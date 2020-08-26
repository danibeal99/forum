<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view ('posts/index', compact ('posts'));
    }

    public function create($newpost)
    {
        $newpost =  Post::create([
        'title' =>
        'body'=>

        ])

        return view ('posts/createpost', compact ('posts'));
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();    }

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