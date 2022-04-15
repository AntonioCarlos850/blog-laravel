<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('site.post.index',['post'=>$post]);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function panelIndex()
    {
        return view('panel.post.index');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function panelPost($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('site.post.index',['post'=>$post]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Post::create($request->all());
        
        return redirect()->route('post.panel')->with('success','Formulário enviado com sucesso');
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
        $post = Post::find($id);
 
        $post->title = $request->input('title');
        $post->image = $request->input('image');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
 
        $post->delete();
    }
}
