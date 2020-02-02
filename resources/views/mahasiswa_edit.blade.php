<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data</title>
    </head>
   <body style="background-color: rgb(44,44,44);">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data mahasiswa - <strong>EDIT DATA</strong></a>
                </div>
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
            </div>
        </div>
    </body>
</html>