<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostContactForm;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->cat_name==='全部' || !isset($request->cat_name)){
            $items = Post::orderBy('created_at','desc')->paginate(5);
        }else{
            $items = Post::where('cat_name',$request->cat_name)
            ->orderBy('created_at','desc')
            ->paginate(5);
        }

        // dd($items);
        return view('bbs.top',compact('items'));
    }

    public function commentAdd(Request $request){
        
            $comment = new Comment;
            $comment->comment = $request->comment;
            $comment->user_id = $request->user_id;
            $comment->post_id = $request->post_id;
            $comment->save();
        
        return redirect('/bbs/show/' . $request->post_id);
    }
    public function commentDel(Request $request){
        $id = $request->id;
        
        $comment = Comment::find($id)->delete();
        
    
    return redirect('/bbs/show/' . $request->post_id);
}

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostContactForm $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->user_id = Auth::id();
        $post->cat_name = $request->cat_name;
        $post->content = $request->content;
        $post->save();
        $last_insert_id = $post->id;

        return redirect('/bbs/show/' . $last_insert_id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {   
        $user_id = Auth::id();

        
        $posts = Post::find($id);
        $comments = Comment::where('post_id',$id)->paginate(10);
        // dd($comments);
        
        $param = ['posts'=>$posts,'comments'=>$comments,'user_id'=>$user_id];

        return view('bbs.show',$param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user_id = Auth::id();

        $posts = Post::where('user_id',$user_id)->orderBy('created_at','desc')->paginate(5);

        return view('bbs.edit',['posts'=>$posts]);
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
    public function destroy(Request $request)
    {
        $id = $request->id;
        Post::find($id)->delete();
        Comment::where('post_id',$id)->delete();
        return redirect(route('posts.edit'));
    }
}
