<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
      public function index()
    {
        //get all posts from Model
        $posts = Post::latest()->get();

        //passing posts to view
        return view('post.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
       
        // $this->validate($request, [
            
        //     'title'     => 'required|min:5',
        //     'content'   => 'required|min:10'
        // ]);

        // //create post
        // Post::create([
            
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);

        // //redirect to index
        // return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // return view('post.tambahcomment', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         //validate form
         $this->validate($request, [
            'title'    => 'required|min:1',
            'content'  => 'required|min:2',
                
        ]);
             //update post without image
             $pengguna->update([
            'title'     => $request->title,
           
        ]);
        // relasi dari tabel telepon ke tabel pengguna
        
        // $telepon = Comment::where('post_id', $post->id)->update([
        //     'nomortelepon'   => $request->nomortelepon
        // ]);
        //redirect to index
        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
         //delete post
         $post->delete();

         //redirect to index
         return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
