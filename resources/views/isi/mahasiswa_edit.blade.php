@extends('layout.layout')
@section('content')

<div class="card-body">
                    <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}">

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

                        <div class="form-group">
                            <input type="submit" class="btn btn-dark" value="Simpan">
                        </div>

                    </form>

                </div>

@stop