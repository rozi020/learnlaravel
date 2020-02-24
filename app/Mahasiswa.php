<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jurusan;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    protected $fillable = ['nama','nim','image','jurusan'];

        public function jurusan(){
    	return $this->belongsTo('App\Jurusan', 'jurusan','id');
    }

}
