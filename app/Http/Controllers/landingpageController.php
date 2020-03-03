<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use App\Jurusan;

use App\Landingpage;

class landingpageController extends Controller
{
    public function index(Request $request)
    {
    $mahasiswa = Landingpage::when($request->search, function($query) use($request){
            $query->where('nama', 'LIKE', '%'.$request->search.'%')
            ->orWhere('nim', 'like', "%".$request->search."%") 
            ->orWhere('jurusan', 'like', "%".$request->search."%");
        })->paginate(5);
      $jurusan = Jurusan::all();
    	return view('landingpage/index', ['mahasiswa' => $mahasiswa], compact('mahasiswa','jurusan'));
    }




}
