<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan1')->get();
    	return view('indexKaryawan',['karyawan1' => $karyawan]);
    }

	public function tambah()
	{
		return view('tambahKaryawan');
	}

	public function store(Request $request)
	{
		DB::table('karyawan1')->insert([
			'Nama' => $request->Nama,
			'NIP' => $request->NIP,
			'Pangkat' => $request->Pangkat,
			'Gaji' => $request->Gaji
		]);
		return redirect('/karyawan')->with('success', 'Data berhasil ditambahkan.');;

	}

	public function hapus($NIP)
	{
		DB::table('karyawan1')->where('NIP',$NIP)->delete();
		return redirect('/karyawan')->with('success', 'Data berhasil dihapus.');
	}
}
