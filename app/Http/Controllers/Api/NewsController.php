<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return response([
            'total'=>$news->count(),
            'message'=>'Retrieved successfuly',
            'data'=>NewsResource::collection($news),
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
            'judul' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'category_id' => 'required|numeric',
            'slug' => 'required|max:25|unique:news',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }

        $news = News::create($request->all());
        return response(['data' => new NewsResource($news), 'message' => 'News has been created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        if($news != null) {
            return response(['project' => new NewsResource($news), 'message' => 'Retrieved successfully'], 200);
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
            'judul' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'category_id' => 'required|numeric',
            'slug' => 'required|max:25|unique:news',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }

        $news = News::find($id);
        if ($news != null) {
            $news->update($request->all()); 
            return response(['data' => new NewsResource($news), 'message' => 'News has been updated'], 202);
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
        $news = News::find($id);
        if ($news != null) {
            $news->delete();
            return response(['message' => 'News has been deleted'], 203);
        } else {
            return response([
                'message' => 'No data found!'
            ], 403);
        }
    }
}
