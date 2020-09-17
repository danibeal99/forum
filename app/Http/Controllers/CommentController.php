<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreComment;

class CommentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {

    }

    public function myposts()
    {

    }

    public function create(post $post)

    {
        //return dd($post);



        return view ('comments/createcomment', ['post' => $post]);
    }

    public function store(StoreComment $request, post $post, comment $comment)
    {

        $commentdata = $request->input('comment');

     
            $commentdata['user_id'] =  Auth::user()->id;
            $commentdata['post_id'] =  $post->id;


           dd($commentdata);

            //dd($commentdata);
            $comment =  Comment::create($commentdata);
            return redirect(route('posts.show', ['post' => $post->id]));
         

       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($comments, $postid)

    {   

        //$post = Post::find($id);

        $comments = Comment::where('post_id',$postid)->get();



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

    //    $postdata = $request->input('post');


    //     $post->update(['title'=>$postdata['title']]);
    //     $post->update(['body'=>$postdata['body']]);

    //     return redirect(route('posts.show', ['post' => $post->id]))->with('message', 'Post Updated');

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
        

        // $post->delete();

        // return redirect(route('posts.index'))->with('message', 'Post Deleted');
    }
}






//