<?php

namespace Mostafiz\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mostafiz\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function save(Request $request)
    {
       Contact::create($request->all());
    }
}
