<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function indexkaryawan1()
    {
        $masker = DB::table('karyawan1')->paginate(10);
    	return view('indexkaryawan1',['karyawan1' => $karyawan1]);
    }

    public function editkaryawan1($NIP)
    {
    $karyawan1 = DB::table('karyawan1')->where('NIP', '=', $NIP)->get();
    return view('editkaryawan1', ['karyawan1' => $karyawan1]);
    }

    public function tambahkaryawan1()
    {
	return view('tambahkaryawan1');
    }

    public function store(Request $request)
    {
	DB::table('karyawan1')->insert([
		'NIP' => $request->NIP,
		'Nama' => $request->Nama,
        'Pangkat' => $request->Pangkat,
		'Gaji' => $request->Gaji
	]);

    return redirect('/karyawan1');

    }

    // update data karyawan
    public function update(Request $request)
    {
    $request->validate([
        'Nama' => 'required|max:50',
        'Pangkat' => 'required|max:15',
        'Gaji' => 'required|integer',
    ]);

	DB::table('karyawan1')->where('NIP',$request->NIP)->update([
		'NIP' => $request->NIP,
		'Nama' => $request->Nama,
        'Pangkat' => $request->Pangkat,
		'Gaji' => $request->Gaji
	]);
	// alihkan halaman ke halaman karyawan1
	return redirect('/karyawan1');
    }

    // method untuk hapus data karyawan1
    public function hapus($NIP)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan1')->where('NIP',$NIP)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan1');
    }

}
