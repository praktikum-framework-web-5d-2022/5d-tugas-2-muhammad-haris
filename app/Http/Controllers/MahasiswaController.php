<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController
{
    public function index()
    {
        $Mhs = DB::select('select * from Mahasiswa');
        return view('MahasiswaRaw', ['data' => $Mhs, 'title' => 'Mahasiswa']);
    }
    public function insert()
    {
        $Mhs = DB::insert("insert into 
        Mahasiswa(
            npm,
            nama, 
            jenis_kelamin, 
            alamat,
            tempat_lahir,
            tanggal_lahir,
            photo)
        values(
            '0006',
            'Muhammad Haris',
            'Laki Laki',
            'Bekasi',
            'Karawang',
            '2001-03-05',
            'FPW'
            )");

        return "Berhasil disimpan";
    }
    public function delete()
    {
        $Mhs = DB::delete('delete from Mahasiswa where id=4');
        return "Berhasil dihapus";
    }
    public function update()
    {
        $MhsUpdate = DB::update("update Mahasiswa set nama='Rick Roll' where id = 5");
        return "Berhasil diupdate";
    }
}

// Raw SQL
