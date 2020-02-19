@extends('layout.layout')
@section('content')

<div class="card-body">
                    <a href="/jurusan" class="btn btn-secondary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="/jurusan/update/{{ $jurusan->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" placeholder="Nama mahasiswa .." value=" {{ $jurusan->jurusan_mahasiswa }}">

                            @if($errors->has('jurusan'))
                                <div class="text-danger">
                                    {{ $errors->first('jurusan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">

                            <input type="submit" class="btn btn-dark" value="Simpan">
                        </div>

                    </form>

                </div>

@stop