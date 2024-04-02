<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts','categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender', 'email', 'tel', 'address','building' , 'detail','item']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name','last_name','gender', 'email', 'tel', 'address','building', 'detail','item']);
        Contact::create($contact);
        return view('thanks');
    }
}
