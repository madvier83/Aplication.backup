<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'nama_stmik' => "STMIK MARDIRA INDONESIA BANDUNG",
            'alamat' =>  "Jl. Soekarno-Hatta No. 211 Leuipanjang, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40233",
        ];
        return view('bab5/home',$data);
    }

    public function siswa() {
        return view("bab5/siswa");
    }
    public function user() {
        return view("bab5/user");
    }
}
