<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdatePostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $post = $posts->first();

        // dd($posts);

        return view('posts.index',[

            'posts' => $posts
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect(route('posts.index')); 
    }

    public function show($id)
    {
        // return '@ show method';
        return view('posts.profile', ['post' => Post::findOrFail($id),
    ]);
    }


    public function edit($id)
    {
        $users = User::all();
        $post = Post::find($id);
        // show the edit form and pass the post
        
        return view('posts.update',[
            'posts' => $post,
            'users' => $users
        ]);
    }

    public function update(Request $request)
    {   
        
        $posts = Post::where('id', $request->id)->first();
        
            $posts->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);
        
        
       return redirect(route('posts.index')); 
    }


    public function destroy($id)
    {
        // delete
        $post = Post::find($id);

        $post->delete();

        // redirect
        return redirect(route('posts.index'));
    }

}
