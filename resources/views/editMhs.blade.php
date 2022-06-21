@extends('layouts/main')
@section('title','FormulirMahasiswa')
@section('article')
<div class="card-header"></div>
    <div class="card-body">
        <div class="container-fluid rounded mt-4">
            @php
            $bidang_minat = explode(',', $mahasiswa->bidang_minat);
            @endphp
            <form action="/mahasiswa/updatemahasiwa/{{$mahasiswa->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-25">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control"  value="{{ $mahasiswa->nim }}" readonly>
                </div>
                <div class="form-group w-25">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                </div>
                <label>Gender</label>
                <div class="form-check w-25">
                    <input type="radio"name="gender" value="wanita" {{ $mahasiswa->gender == 'wanita' ? 'checked':''}} class="form-check-input">
                    <label>Wanita</label>
                </div>
                <div class="form-check w-25">
                    <input type="radio"name="gender" value="pria" {{ $mahasiswa->gender == 'pria' ? 'checked':''}} class="form-check-input">
                    <label>Pria</label>
                </div>       
                <div class="form-group w-25">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control">
                    <option value="0">--Pilih Jurusan--</option>
                    <option value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':''}}>--Sistem Informasi--</option>
                    <option value="Teknik Informatika" {{ $mahasiswa->jurusan == 'Teknik Informatika' ? 'selected':''}}>--Teknik Informatika--</option>
                    </select>
                </div>
                <label>Bidang Minat</label>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Olahraga" {{in_array('Olahraga', $bidang_minat) ? 'checked':''}} class="form-check-input">
                        <label>Olahraga</label>
                    </div>
                    <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Kesenian" {{in_array('Kesenian', $bidang_minat) ? 'checked':''}} class="form-check-input">
                        <label>Kesenian</label>
                    </div>
                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SAVE" class="btn btn-outline-primary">
                    </div>
                </form>
        </div>  
@endsection