<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'jam_matkul',
        'ruang_matkul'
    ];
}
