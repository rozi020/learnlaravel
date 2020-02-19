@extends('layout.layout')
@section('content')

   <div class="card-body">
                    <br>
                    <form action="/jurusan/store"  id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan ..">

                            @if($errors->has('jurusan'))
                                <div class="text-danger">
                                    {{ $errors->first('jurusan')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Simpan">
                        </div>

                    </form>

                </div>

@stop