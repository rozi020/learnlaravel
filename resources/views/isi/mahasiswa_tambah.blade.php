@extends('layout.layout')
@section('content')

   <div class="card-body">
                    <br>
                    <form action="/mahasiswa/store"  id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama mahasiswa ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>NIM</label>
                            <input name="nim" class="form-control" placeholder="NIM mahasiswa .."></input>

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
                            <label>Jurusan</label>
                            <select class="form-control" name="jurusan">
                                @foreach($jurusan as $j)
                                    <option value="{{ $j->id }}">{{ $j->jurusan_mahasiswa }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Simpan">
                        </div>

                    </form>

                </div>

@stop