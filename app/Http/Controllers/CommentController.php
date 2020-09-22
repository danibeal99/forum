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

            $comment =  Comment::create($commentdata);
            return redirect(route('posts.show', ['post' => $post->id]));
         

       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post, $comment)

    {   
        $post = Post::find($post);
        $comment = Comment::find($comment);
        //dd($comment);
        //$comment = Comment::find($comment_id)->get();;

         return view('comments/show', ['comment'=>$comment,'post'=>$post ]);


        //$comments = Comment::where('post_id',$postid)->get();



    }


    public function edit($post, $comment)
    {

        dd($post);
        return view('comments/updatecomment', ['comment' => $comment]);
       
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
    public function destroy($post, $comment)
    {
        
        $post = Post::find($post);

        $comment->delete();
  
        return redirect('posts.show', ['post' => $post->id])->with('message', 'Comment Deleted');
    }
}






//