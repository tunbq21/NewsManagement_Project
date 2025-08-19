<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Image;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news')
            ->join('images', 'news.Img_Id', '=', DB::raw('CAST(images.Id AS CHAR)'))
            ->join('authors', 'news.Author_Id', '=', 'authors.Author_Id')
            ->select('news.*', 'images.Img_Name', 'images.Img_Url', 'authors.Name as Author_Name', 'authors.Email as Author_Email', 'authors.Author_Url as Author_Url')
            ->get();       
        return response()->json($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // news::create($request ->all());
        //     return redirect() ->route('news.index')->with('thongbao','Thêm tin thành công!');
        $news = News::create($request->all());
        return response()->json($news, 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return response()->json($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
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
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update (request()-> all());
        //  return redirect()->route('author.index')->with('thongbao', 'Cập nhật tác giả thành công!');
        return response()->json($news, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return response()->json(null, 204);

    }
}
