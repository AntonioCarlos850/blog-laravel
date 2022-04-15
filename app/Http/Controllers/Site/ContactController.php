<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function create(ContactFormRequest $request)
    {
        Contact::create($request->all());
        
        return redirect()->route('contact')->with('success','Formulário enviado com sucesso');
    }
}
