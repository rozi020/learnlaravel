@extends('layout.layout')
@section('content')

<div class="card-body">
                    <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama mahasiswa .." value=" {{ $mahasiswa->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>NIM</label>
                            <textarea name="nim" class="form-control" placeholder="NIM mahasiswa .."> {{ $mahasiswa->nim }} </textarea>

                             @if($errors->has('nim'))
                                <div class="text-danger">
                                    {{ $errors->first('nim')}}
                                </div>
                            @endif

                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" label for="file-upload" id="file-drag">Choose file</label>
                            </div>
                          </div>


                        <div class="form-group">

                            <input type="submit" class="btn btn-dark" value="Simpan">
                        </div>

                    </form>

                </div>

@stop