<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Peserta;

class SelectController extends Controller
{
    public function index()
    {
        return view('select2');
    }

    public function browse(Request $request)
    {
        $data = Peserta::whereRaw("(nama LIKE '%" . $request->get('q') . "%' OR bagian LIKE '%" . $request->get('q') . "%')")
            ->limit(30)
            ->get();
        return response()->json($data);
    }
}
