@extends('layouts/main')
@section('title','Formulir User')
@section('article')
<div class="card-header"></div>
    <div class="card-body">
        <div class="container-fluid rounded mt-4">
            <form action="/user/updateuser/{{$user->id}}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-warning">
                        <ui>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ui>
                    </div>
                @endif
                @method('PUT')
                <div class="form-group w-25">
                    <label>NIK</label>
                    <input type="number" name="nik_user" class="form-control" placeholder="Masukkan NIK Pengguna" value="{{ $user->nik_user }}" readonly>
                </div>
                <div class="form-group w-25">
                    <label>Nama</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama Pengguna" value="{{ $user->nama_user }}">
                </div>
                <div class="form-group w-25">
                    <label>No Handphone</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Handphone Pengguna" value="{{ $user->no_hp }}">
                </div>
                <div class="form-group w-25">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Pengguna" value="{{ $user->password }}">
                </div>
                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SAVE" class="btn btn-outline-primary">
                    </div>
                </form>
        </div>  
@endsection