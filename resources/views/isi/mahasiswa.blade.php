@extends('layout.layout')
@section('content')

 <div class="card mt-5">
                <div class="card-body">
                    
                    
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
                                    <a href="/mahasiswa/edit/{{ $m->id }}" class="btn btn-secondary">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@stop