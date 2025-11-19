<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->all();
        return view('confirm', compact('contact'));
    }
}
