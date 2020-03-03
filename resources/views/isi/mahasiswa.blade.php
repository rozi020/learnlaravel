@extends('layout.layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">
<!--                 
                    <input type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
                                   
                     -->
                    <form method="GET" class="form-inline">
                                         <!-- Search form -->
                    <div class="active-cyan-3 active-cyan-4 mb-4">
                      <input class="form-control" type="text" aria-label="Search" placeholder="Cari Mahasiswa .." value="{{ request()->get('search') }}" name="search">
                      <a href="/mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    </div>

                    </form> 
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>FOTO</th>
                                <th>Jurusan</th>
                                <th>OPSI</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $m => $mhs)
                            <tr>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td> <img src="{{ url('image/'.$mhs->image) }}" width="150px"> </td>
                                <td>
                                    @foreach($jurusan as $j)
                                        @if($mhs->jurusan == $j->id)
                                            {{ $j->jurusan_mahasiswa }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-secondary">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $mhs->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                        <br/>

 
    {{ $mahasiswa ?? ''->links() }}
    
                </div>
            </div>
@stop