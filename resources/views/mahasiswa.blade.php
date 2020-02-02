<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tabel Mahasiswa</title>
    </head>
    <body style="background-color: rgb(44,44,44);">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data mahasiswa</a>
                </div>
                <div class="card-body">
                    <a href="/mahasiswa/tambah" class="btn btn-secondary">Tambah Data</a>
                    <br/>
                    <br/>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $m)
                            <tr>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->nim }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $m->id }}" class="btn btn-dark">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>