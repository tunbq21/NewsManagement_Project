<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/image');
        $image = $response->json() ;
         return view('index/imgsIndex', ['image' => $image]);
        // return $response->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create/createImg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/image', $request->all());
        return redirect()->route('image.index')->with('thongbao','Thêm ảnh thành công!');

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
        $response = Http::get("http://127.0.0.1:8000/api/image/{$id}");
        $image = $response->json();
        return view('update/updateImg', ['image' => $image]);

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
        $response = Http::put("http://127.0.0.1:8000/api/image/{$id}", $request->all());
        return redirect()->route('image.index')->with('thongbao','Sữa ảnh thành công!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/image/{$id}");
        return redirect()->route('image.index')->with('thongbao','Xóa ảnh thành công!');

    }
}
