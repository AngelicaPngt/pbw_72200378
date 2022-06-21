@extends('layouts/main')
@section('title','Dosen')
@section('article')
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i> ADD USER</a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
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
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $no => $u)
                <tr>
                    <th scope="row">{{ $user->firstItem() + $no}}</th>
                    <td>{{$u -> nik_user}}</td>
                    <td>{{$u -> nama_user}}</td>
                    <td>{{$u -> no_hp}}</td>
                    <td>{{$u -> password}}</td>
                    <td>
                        <a href="/user/edituser/{{ $u->id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/user/hapususer/{{ $u -> id}}" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')" 
                            class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></i></a>
                    </td>
                </tr>
                @endforeach                                
            </tbody>
        </table>
    <span class="float-right">{{$user->links()}}</span>
    </div>
@endsection