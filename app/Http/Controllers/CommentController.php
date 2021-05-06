<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {
        $comments = Comment::where('post_id',$post_id)
                            ->orderBy('id', 'desc')->get();
        return $comments;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$post_id)
    {
        $comment = new Comment;
        // $comment->user_id = $request->userIdTxt;
        // $comment->post_id = $request->postIdTxt;
        $comment->post_id=$post_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->state = 1;
        // $comment->level = 1;
        // $comment->level = $request->
        $comment->comment = $request->message;
        $comment->save();
        
        return $comment;
        // return redirect('/blog/'.$request->postSlugTxt);
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function count($post_id){
        $countComment = Comment::where('post_id', $post_id)->count();
        return $countComment;
    }
}
