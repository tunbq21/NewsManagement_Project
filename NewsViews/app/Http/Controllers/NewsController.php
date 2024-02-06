<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/news');
        $news = $response->json() ;
         return view('index/newsIndex', ['news' => $news]);
        // return $response->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responseAuthor = Http::get('http://127.0.0.1:8000/api/author');
        $author = $responseAuthor->json() ;
        $responseImage = Http::get('http://127.0.0.1:8000/api/image');
        $image = $responseImage->json() ;
        return view('create/createNews', ['author' => $author,'image'=> $image]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/news', $request->all());
        return redirect()->route('news.index')->with('thongbao','Thêm tin thành công!');

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
        $responseAuthor = Http::get('http://127.0.0.1:8000/api/author');
        $author = $responseAuthor->json() ;
        $responseImage = Http::get('http://127.0.0.1:8000/api/image');
        $image = $responseImage->json() ;
        $response = Http::get("http://127.0.0.1:8000/api/news/{$id}");
        $news = $response->json();
        return view('update/updateNews', ['news' => $news, 'author' => $author,'image'=> $image]);
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
        $response = Http::put("http://127.0.0.1:8000/api/news/{$id}", $request->all());
        return redirect()->route('news.index')->with('thongbao','Sữa tin thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/news/{$id}");
        return redirect()->route('news.index')->with('thongbao','Xóa tin thành công!');

    }
}
