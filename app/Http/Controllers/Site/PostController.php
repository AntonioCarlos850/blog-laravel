<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $post = Post::where('slug', $slug)->first();
        return view('site.post.index', ['post' => $post]);
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
    public function editPage($id)
    {
        $post = Post::where('id', $id)->first();
        $categorias = Category::orderBy('id')->get();

        return view('panel.post.edit', [
            'post' => $post,
            'categorias'=>$categorias
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::create([
            'title' => 'Novo Post',
            'image' => '',
            'slug' => 'novo-post' . random_int(0, 9999),
            'content' => '',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        return redirect()->route('post.edit', [
            'id' => $post->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->input('title');

        if($request->hasFile('image') && $request->image->isValid()){
            $post->image = $request->image->store('public/image');
        }

        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->category_id = $request->categoria;

        $post->save();
        return redirect()->route('post.edit', ['id'=>$post->id])->with('success', 'Post editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();
        return redirect()->route('painel');
    }
}
