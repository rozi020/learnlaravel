<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class mahasiswaController extends Controller
{
    
 
    public function index()
    {
    	$mahasiswa = Mahasiswa::all();
    	return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

        public function tambah()
    {
    	return view('mahasiswa_tambah');
    }

       public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'nim' => 'required'
    	]);
 
        Mahasiswa::create([
    		'nama' => $request->nama,
    		'nim' => $request->nim
    	]);
 
    	return redirect('/mahasiswa');
    }

    public function edit($id)
	{
	   $mahasiswa = Mahasiswa::find($id);
	   return view('mahasiswa_edit', ['mahasiswa' => $mahasiswa]);
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'nama' => 'required',
		   'nim' => 'required'
	    ]);

	    $mahasiswa = Mahasiswa::find($id);
	    $mahasiswa->nama = $request->nama;
	    $mahasiswa->nim = $request->nim;
	    $mahasiswa->save();
	    return redirect('/mahasiswa');
	}

	public function delete($id)
	{
	    $mahasiswa = Mahasiswa::find($id);
	    $mahasiswa->delete();
	    return redirect('/mahasiswa');
	}
	 
}

