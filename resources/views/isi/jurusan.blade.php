@extends('layout.layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">


                    <form method="GET" class="form-inline">
                                         <!-- Search form -->
                    <div class="active-cyan-3 active-cyan-4 mb-4">
                      <input class="form-control" type="text" aria-label="Search" placeholder="Cari Jurusan .." value="{{ request()->get('search') }}" name="search">
                    </div>

                    </form> 
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Jurusan</th>
                                <th>OPSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jurusan as $j)
                            <tr>
                                <td>{{ $j->id }}</td>
                                <td>{{ $j->jurusan_mahasiswa }}</td>

                                <td>
                                    <a href="/jurusan/edit/{{ $j->id }}" class="btn btn-secondary">Edit</a>
                                    <a href="/jurusan/hapus/{{ $j->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                        <br/>
                        Halaman : {{ $jurusan->currentPage() }} <br/>
    Jumlah Data : {{ $jurusan->total() }} <br/>
    Data Per Halaman : {{ $jurusan->perPage() }} <br/>
 
 
    {{ $jurusan->links() }}


                </div>
            </div>
@stop