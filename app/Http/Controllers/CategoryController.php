<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;
use App\Icon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $data = [];
    public function __construct()
    {
     
        $this->data['categories'] = Category::all();
        $this->data['cities'] = City::all();
        $this->data['countposts'] =  Post::where('count_of_ticket', '>', 0)->count();
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::all();
        return view('admin.category.create-category', compact('icons'), $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'icons' => 'required'
        ],
        [
            'name.required' => 'De categorienaam is een verplicht veld',
            'icon.required' => 'Het pictogram is een verplicht veld'
        ]);
        $icon = Icon::whereIn('id', request()->icons)->first();
        
        $category = new Category();
        $category->name = request()->name;
        $category->description = request()->description;

        $link = strtolower(request()->name);
        $link = str_replace(" ", '-', $link);

        $category->link = $link;
        $category->icon = $icon->name;

        $category->save();
        return redirect()->back()->with('success', 'Je hebt met succes een nieuwe categorie aangemaakt');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id) ?? abort(404);
        $icons = Icon::all();
        return view('admin.category.show', compact('category', 'icons'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
      
        $category = Category::find(request()->categoryId) ?? abort(404);
        $category->name = request()->name;
        $category->active = request()->active;
        $category->tax = request()->tax;
        $category->description = request()->description;
       

        if(request()->icons)
        {
            $icon = Icon::whereIn('id', request()->icons)->first();
            $category->icon = $icon->name;
        }
        else
        {
            $category->icon = $category->icon;
        }

      
            $category->save();

            return redirect()->back()->with('success', 'Je veranderingen zijn bewaard');
        

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   

    
}
