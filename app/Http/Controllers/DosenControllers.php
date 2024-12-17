<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }

    public function blog(){
        return view('blog');
    }
    public function biodata(){
        $nama = 'Rosdiani Adiningsih';
        $umur = 20;
        $hasil = 26 + 50;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata',['nama' => $nama , 'umur' => $umur , 'hasil' => $hasil,'matkul' => $pelajaran]);
    }
}
