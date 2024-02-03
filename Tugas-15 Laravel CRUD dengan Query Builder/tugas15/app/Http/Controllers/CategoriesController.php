<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function create()
    {
        return view('category/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ]);
        DB::table('categories')->insert([
            "name" => $request["name"],
            "description" => $request["description"]
        ]);
        return redirect('/category');
    }

    
  public function index()
  {
      $category = DB::table('category')->get();
      return view('category.index', ["category"=>$category]);
  }

  public function show($id)
  {
      $categoryById = DB::table('categories')->get();
      return view('category.data', ["category"=>$category]);
  }

  public function edit($id)
  {
      $categoryById = DB::table('categories')->get();
      return view('category.edit', ["category"=>$category]);
  }

  public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ]);
        DB::table('categories')->where
        ('id',$id)
        ->update([
            "name" => $request["name"],
            "description" => $request["description"]
        ]);
        return redirect('/category');
    }

    public function delete($id)
    {
        $categoryById = DB::table('categories')->get();
        return view('category.delete', ["category"=>$category]);
    }

}
