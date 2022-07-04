<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return response([
            'total'=>$category->count(),
            'message'=>'Retrieved successfuly',
            'data'=>CategoryResource::collection($category),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'slug' => 'required|max:50',
        ]);

        if($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }

        $category = Category::create($request->all());
        return response(['data' => new CategoryResource($category), 'message' => 'Category has been created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if($category != null) {
            return response(['project' => new CategoryResource($category), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'slug' => 'required|max:50',
        ]);

        if($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }

        $category = Category::find($id);
        if ($category != null) {
            $category->update($request->all()); 
            return response(['data' => new CategoryResource($category), 'message' => 'Categories has been updated'], 202);
        } else {
            return response(['message' => 'No data found!'], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category != null) {
            $category->delete();
            return response(['message' => 'Categories has been deleted'], 203);
        } else {
            return response([
                'message' => 'No data found!'
            ], 403);
        }
    }
}
