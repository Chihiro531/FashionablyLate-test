<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin',compact('categories'));
    }

    public function store()
    {
        
    }

    public function delete()
    {
        
    }

}
