<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categories;
    protected $categoryData;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.category.dashboard',['categories'=> $this->categories]);
    }
    public function add()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->categoryData                  = new Category();
        $this->categoryData->name            = $request->name;    
        $this->categoryData->slug            = $request->slug;
        $this->categoryData->save();

        return redirect('/admin/category')->with('message', 'Category Information Save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->categories = Category::find($id);
        return view('admin.category.edit', ['categories'=>$this->categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $this->categories             = Category::find($request->id);
            $this->categories->name       = $request->name;
            $this->categories->slug       = $request->slug;
            $this->categories->save();
            return redirect('/admin/category')->with('message', 'Category Information Save Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect('/admin/category')->with('message', 'Category Information delete Successfully');
    }
}
