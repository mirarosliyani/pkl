<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Berhasil di tambahkan'
        ];
        return response()->json($response, 200);
    }
    public function browser(Request $request)
    {
        $data = peserta::whereRaw("(nama LIKE'%" . $request->get('q') . "%' OR bagian LIKE '%" . $request->get('q') . "%')")
            ->limit(30)
            ->gegt();
        return response()->json($data);
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
        $tag = new Tag();
        $tag->nama = $request->namasiswa;
        $tag->save();
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Berhasil di tambahkan'
        ];
        return response()->json($response, 200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Berhasil dihapus'
        ];
        return response()->json($response, 200);
    }
}
