<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $main_posts = Post::orderBy('id')->limit(4)->get();
        $featured_posts = Post::where('id','>','4')->orderBy('id')->limit(4)->get();
        return view('site.home.index',[
            'main_posts'=>$main_posts,
            'featured_posts'=>$featured_posts,
        ]);
    }
}
