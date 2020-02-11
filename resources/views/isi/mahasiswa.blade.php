@extends('layout.layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">
<!--                 
                    <input type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
                                   
                     -->
                    <form action="/mahasiswa/cari" method="GET">
                                         <!-- Search form -->
                    <div class="active-cyan-3 active-cyan-4 mb-4">
                      <input class="form-control" type="text" aria-label="Search" name="cari" placeholder="Cari Mahasiswa .." value="{{ old('cari') }}">
                    </div>
                    </form> 
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>FOTO</th>
                                <th>OPSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $m)
                            <tr>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->nim }}</td>
                                <td> <img src="{{ url('image/'.$m->image) }}" width="150px"> </td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $m->id }}" class="btn btn-secondary">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                        <br/>

    Halaman : {{ $mahasiswa->currentPage() }} <br/>
    Jumlah Data : {{ $mahasiswa->total() }} <br/>
    Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>
 
 
    {{ $mahasiswa->links() }}
    
                </div>
            </div>
@stop