<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    // public function __construct() {
    //     $this->GuruModel = new GuruModel();
    // }
    
    public function index() {
        $data = [
            'guru' => Guru::AllData()
        ]; 
        return view("bab5/guru", $data);
    }

    public function show($id) {
        $guru = Guru::Where("id" , $id)->First();
        if(!$guru){
            abort(404);
        }
        $data = [
            'guru' => $guru
        ];

        return view("bab5/guruDetail", $data);
    }

    public function create() {
        return view("bab5/guruCreate");
    }

    public function store() {
        $guru = request()->validate([
            'nip' => "required|unique:guru,nip|min:4|max:5",
            'nama' => "required",
            'mapel' => "required",
            'foto' => "required|image|max:1024"
        ]);
        
        $file = request()->foto;
        $filename = request()->nip.".".$file->extension();
        $file->move(public_path('image'), $filename);
        
        $guru['foto'] = $filename;

        Guru::Store($guru);
        return redirect("/bab5/guru")->with("pesan", "Data berhasil ditambahkan");
    }
}
