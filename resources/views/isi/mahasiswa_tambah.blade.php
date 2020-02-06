@extends('layout.layout')
@section('content')

   <div class="card-body">
                    <br>
                    <form method="post" action="/mahasiswa/store">

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
                            <label>Alamat</label>
                            <input name="nim" class="form-control" placeholder="NIM mahasiswa .."></input>

                             @if($errors->has('nim'))
                                <div class="text-danger">
                                    {{ $errors->first('nim')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Simpan">
                        </div>

                    </form>

                </div>

@stop