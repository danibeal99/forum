<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePost;

class PostController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $posts = Post::all();

       
        return view ('posts/index', compact ('posts'));
    }

    public function myposts()
    {
        $user_id = Auth::user()->id;

        $posts = Post::where('user_id', $user_id)->get();

        return view ('posts/showmyposts', compact ('posts'));
    }

    public function create()
    {
        return view ('posts/createpost');
    }

    public function store(StorePost $request)
    {

        $postdata = $request->input('post');

            $postdata['user_id'] =  Auth::user()->id;
            $post =  Post::create($postdata);
            return redirect(route('posts.show', ['post' => $post->id]));
         

       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        //$post = Post::find($id);

        // dd($post);

        $post = Post::with('comment')->find($id);
    
    
        //$post = Post::find($id)->with('comment')->get();

        //dd($post);

        return view('posts/show',compact ('post'))->with('comment', $post->comment);
       // return view('posts.show')->with('blogcomments', $post->blogcomments);


    }


    public function edit(Post $post)
    {

    
        return view('posts/updatepost', ['post' => $post]);
       
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

        //return dd($request->input('post'));

       // $post->title=$request->input('post'['title']);

       $postdata = $request->input('post');


        $post->update(['title'=>$postdata['title']]);
        $post->update(['body'=>$postdata['body']]);

        return redirect(route('posts.show', ['post' => $post->id]))->with('message', 'Post Updated');

        // return dd($request);
        // $Updatepost = $request->input('post');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {


        $post->delete();

        return redirect(route('posts.index'))->with('message', 'Post Deleted');
    }



}






//