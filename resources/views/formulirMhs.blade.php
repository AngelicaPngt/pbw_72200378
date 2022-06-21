@extends('layouts/main')
@section('title','FormulirMahasiswa')
@section('article')
<div class="card-header"></div>
    <div class="card-body">
        <div class="container-fluid rounded mt-4">
            <form action="/mahasiswa/simpanMhs" method="POST">
                @csrf
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group w-25">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
                </div>
                <label>Gender</label>
                <div class="form-check w-25">
                    <input type="radio"name="gender" value="wanita" class="form-check-input">
                    <label>Wanita</label>
                </div>
                <div class="form-check w-25">
                    <input type="radio"name="gender" value="pria" class="form-check-input">
                    <label>Pria</label>
                </div>       
                <div class="form-group w-25">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control">
                    <option value="0">--Pilih Jurusan--</option>
                    <option value="Sistem Informasi">--Sistem Informasi--</option>
                    <option value="Teknik Informatika">-- Teknik Informatika--</option>
                    </select>
                </div>
                <label>Bidang Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Olahraga" class="form-check-input">
                        <label>Olahraga</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Kesenian" class="form-check-input">
                        <label>Kesenian</label>
                    </div>
                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SAVE" class="btn btn-outline-primary">
                    </div>
                </form>
        </div>  
@endsection