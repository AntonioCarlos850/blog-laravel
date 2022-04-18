<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('id')->limit(6)->get();
        $categorias = Category::orderBy('id')->limit(6)->get();
        $tags = Tag::orderBy('id')->limit(6)->get();

        return view('panel.home.index',[
            'posts' => $posts,
            'categorias' => $categorias,
            'tags' => $tags
        ]);
    }
}
