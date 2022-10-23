<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guru extends Model
{
    // use HasFactory;

    protected $table = "guru";
    protected $fillable = ['nip', 'nama', 'mapel','foto'];
    protected $guarded = ['id'];

    public static function AllData() {
        return DB::table('guru')->get();
        // return ([
        //     [
        //         'nip' => '1234',
        //         'nama' => 'Budi',
        //         'mapel' => 'Biologi'
        //     ],
        //     [
        //         'nip' => '1222',
        //         'nama' => 'Andi',
        //         'mapel' => 'Matematika'
        //     ],
        //     [
        //         'nip' => '1111',
        //         'nama' => 'Ani',
        //         'mapel' => 'Bhs. Indonesia'
        //     ],
        // ]);
    }
}
