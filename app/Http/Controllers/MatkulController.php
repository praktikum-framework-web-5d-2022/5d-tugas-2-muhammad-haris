<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController
{
    public function index()
    {
        $mk = DB::table('matkul')->get();
        return view('MatkulQuery', ['data' => $mk], ['title' => 'Mata Kuliah']);
    }

    public function insert()
    {
        $mk = DB::table('matkul')
            ->insert(
                [
                    'kode_mk' => '0004',
                    'nama_mk' => 'Cloud Computing'
                ]
            );
        return "Berhasil disimpan";
    }

    public function delete()
    {
        $mk = DB::table('matkul')
            ->where('nama_mk', 'Framework')
            ->delete();
        return "Berhasil dihapus";
    }

    public function update()
    {
        $mk = DB::table('matkul')
            ->where('id', 3)
            ->update(['nama_mk' => 'Data Mining']);
        return "Berhasil diupdate";
    }
}
