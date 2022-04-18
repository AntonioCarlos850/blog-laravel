<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.tag.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function panelIndex()
    {
        return view('panel.tag.index');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editPage($id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('panel.tag.edit', ['tag' => $tag]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::create([
            'name' => 'Nova Tag'
        ]);

        return redirect()->route('tag.edit', [
            'id' => $tag->id
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
        $tag = Tag::find($id);

        $tag->name = $request->input('name');

        $tag->save();
        return redirect()->route('tag.edit',['id'=>$tag->id])->with('success', 'Tag editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tag = Tag::find($id);

        $tag->delete();
        return redirect()->route('painel');
    }
}
