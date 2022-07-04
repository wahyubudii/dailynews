<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $news;
    protected $newsData;
    protected $type;
    protected $image;
    protected $imageName;
    protected $directory;
    protected $imageUrl;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->news = News::all();
        return view('admin.news.dashboard',['news'=> $this->news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $this->categories = Category::all();
        return view('admin.news.add', ['categories'=>$this->categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->image = $request->file('image');
        $this->type = $this->image->getClientOriginalExtension();
        $this->imageName = time().'.'.$this->type;
        $this->directory ='news-images/';
        $this->image->move($this->directory, $this->imageName);

        $this->newsData                  = new News();
        $this->newsData->judul           = $request->judul;    
        $this->newsData->penerbit        = $request->penerbit;
        $this->newsData->category_id     = $request->category_id;
        $this->newsData->slug            = $request->slug;
        $this->newsData->description     = $request->description;
        $this->newsData->image           = $this->directory.$this->imageName;
        $this->newsData->save();

       // News::create($request->all());
        return redirect('/admin/news')->with('message', 'News Information Save Successfully');
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
        $this->categories = Category::all();
        $this->news = News::find($id);
        return view('admin.news.edit',['news'=> $this->news, 'categories'=>$this->categories]);
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
        $this->news = News::find($request->id);
        if($this->image = $request->file('image'))
        {
            if(file_exists($this->news->image))
            {
                unlink($this->news->image);
            }
            $this->type             = $this->image->getClientOriginalExtension();
            $this->imageName        = time().'.'.$this->type;
            $this->directory        ='news-images/';
            $this->image->move($this->directory, $this->imageName);
            $this->imageUrl         = $this->directory.$this->imageName;

        }
        else
        {
            $this->imageUrl  = $this->news->image;
        }
        
        $this->news->judul            = $request->judul;
        $this->news->penerbit         = $request->penerbit;
        $this->news->category_id      = $request->category_id;
        $this->news->slug             = $request->slug;
        $this->news->description      = $request->description;
        $this->news->image            =  $this->imageUrl;
        $this->news->save();
        return redirect('/admin/news')->with('message', 'News Information Save Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->news = News::find($id);
        $this->news->delete();
        return redirect('/admin/news')->with('message', 'News Information delete Successfully');
    }
}
