<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use App\Mahasiswa;

class mahasiswaController extends Controller
{
    
 
    public function index()
    {
    	$mahasiswa = Mahasiswa::all();
    	return view('isi/mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

        public function tambah()
    {
    	return view('isi/mahasiswa_tambah');
    }

       public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'nim' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
 


    	   $files = $request->file('fileUpload');
           $destinationPath = 'image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
           
           $mahasiswa = new Mahasiswa;
           $mahasiswa->nama = $request->nama;
           $mahasiswa->nim = $request->nim;
           $mahasiswa->image = $insert['image'] = "$profileImage";
           $mahasiswa->save();


 
    	return redirect('mahasiswa');
    }

    public function edit($id)
	{
	   $mahasiswa = Mahasiswa::find($id);
	   return view('isi/mahasiswa_edit', ['mahasiswa' => $mahasiswa]);
	}

    public function update($id, Request $request)
    {
        $this->validate($request,[
           'nama' => 'required',
           'nim' => 'required',          
           'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $mahasiswa = Mahasiswa::find($id);

        if ($files = $request->file('fileUpload')){
            $usersImage = public_path("image/{$mahasiswa->image}"); // get previous image from folder
        
         if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }
        $destinationPath = 'image/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $insert['image'] = "$profileImage";

        
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->image = $insert['image'] = "$profileImage";
     }
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

	public function delete($id)
	{
	    $gambar = Mahasiswa::where('id',$id)->first();
        File::delete('image/'.$gambar->image);

	    $mahasiswa = Mahasiswa::find($id);
	    $mahasiswa->delete();
	    return redirect('mahasiswa');
	}

	
	 
}

