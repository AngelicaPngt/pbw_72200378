<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaAPIController extends Controller
{
    public function all(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $mahasiswa
        ], 200);
    }

    public function create(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidang_minat' => $request -> bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',
            ], 401);
        }
    }

    public function update(Request $request){
        $mahasiswa = Mahasiswa::whereid($request->id)->update([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidang_minat' => $request -> bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah',
            ], 401);
        }
    }

    public function updateId($id, Request $request){
        $mahasiswa = Mahasiswa::whereid($id)->update([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidang_minat' => $request -> bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah',
            ], 401);
        }
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Dihapus',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Dihapus',
            ], 401);
        }

    }
}
