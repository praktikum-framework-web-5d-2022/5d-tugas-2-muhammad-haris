<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DosenEloquent;


class DosenController

{
    public function index()
    {
        $dsn = DosenEloquent::all();
        return view('DosenEloqORM', ['data' => $dsn], ['title' => 'Dosen']);
    }
    public function insert()
    {
        DosenEloquent::create([
            'nidn' => '005',
            'nama' => 'Rendi',
            'jenis_kelamin' => 'Laki laki',
            'alamat' => 'Bekasi',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '1990-02-09',
            'photo' => 'Hehehehe',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Rendi')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 2)->first()->update([
            'nama' => 'Bagong'
        ]);
        return "Berhasil diupdate";
    }
}
