<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Create(DataRequest $request)
    {
        Data::create([
            'kode_matkul' => $request->kode_matkul,
            'nama_matkul' => $request->nama_matkul,
            'jam_matkul' => $request->jam_matkul,
            'ruang_matkul' => $request->ruang_matkul
        ]);
        return view('home');
    }

    public function View() {
        $datas = Data::all();
        return view('CRUD.view', ['datas' => $datas]);
    }

    public function CreateView() {
        return view('CRUD.create');
    }
}
