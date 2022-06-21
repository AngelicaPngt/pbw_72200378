@extends('layouts/main')
@section('title','mahasiswa')
@section('article')
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="/mahasiswa/formMhs" role="button"><i class="bi bi-plus-square-fill"></i> ADD MAHASISWA</a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
    </div>
    <div class="card-body">
        <div class="alert alert-info">
            <h1 class="h2">Selamat Datang!</h1>
            <i class="h4">{{Auth::user()->nama_user ?? ''}}</i>
        </div>
    </div>
    <div class="card-body">
        @foreach (['info', 'success', 'warning'] as $msg)
        @if (session('alert-'.$msg))
            <div class="alert alert-{{$msg}} alert-dismissible fade show" role="alert">
                <strong>{{ session('alert-'.$msg) }}</strong>
                <button typle="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif  
        @endforeach  
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Bidang Minat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $no => $mhs)
                <tr>
                    <th scope="row">{{ $mahasiswa->firstItem() + $no}}</th>
                    <td>{{$mhs -> nim}}</td>
                    <td>{{$mhs -> nama}}</td>
                    <td>{{$mhs -> gender}}</td>
                    <td>{{$mhs -> jurusan}}</td>
                    <td>{{$mhs -> bidang_minat}}</td>
                    <td>
                        <a href="/mahasiswa/editMhs/{{ $mhs->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/mahasiswa/hapusMhs/{{ $mhs -> id}}" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')" 
                            class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></i></a>
                    </td>
                </tr>
                @endforeach                                
            </tbody>
        </table>
    Total data perhalaman : {{ $mahasiswa ->count()}}
    <span class="float-right">{{$mahasiswa->links()}}</span>
    </div>
@endsection