<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    public function __construct()
    {
     
        $this->data['categories'] = Category::all();
    }
    public function index()
    {
        return view('admin.index', $this->data);
    }
}
