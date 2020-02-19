<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use App\Jurusan;



class JurusanController extends Controller
{
    public function index()
    {
     $jurusan = Jurusan::all();

    $jurusan = DB::table('jurusan')->paginate(5);

    	return view('isi/jurusan', ['jurusan' => $jurusan]);
    }

     public function tambah()
    {
    	return view('isi/jurusan_tambah');
    }
 
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'jurusan' => 'required'
        ]);
 
           $jurusan = new Jurusan;
           $jurusan->jurusan_mahasiswa = $request->jurusan;
           $jurusan->save();


 
    	return redirect('jurusan');
    }

        public function edit($id)
	{
	   $jurusan = Jurusan::find($id);
	   return view('isi/jurusan_edit', ['jurusan' => $jurusan]);
	}

    public function update($id, Request $request)
    {
        $this->validate($request,[
           'jurusan' => 'required',

        ]);

        $jurusan = Jurusan::find($id);

        if ($files = $request->file('fileUpload')){
           
        $jurusan->jurusan_mahasiswa = $request->jurusan;
        
     }
        $jurusan->save();
        return redirect('jurusan');
    }

    	public function delete($id)
	{
	    $jurusan = Jurusan::find($id);
	    $jurusan->delete();
	    return redirect('jurusan');
	}

	  public function cari(Request $request)
{
  // menangkap data pencarian
  $cari = $request->cari;

  // mengambil data dari table pegawai sesuai pencarian data
  $jurusan = DB::table('jurusan')
  ->where('jurusan_mahasiswa','like',"%".$cari."%")  
  ->paginate();

      // mengirim data pegawai ke view index
  return view('isi/jurusan',['jurusan' => $jurusan]);

}


}
