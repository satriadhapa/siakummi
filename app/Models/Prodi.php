<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodi";
    protected $primaryKey = "id";
    protected $fillable = [
        "id","prodi"
    ];
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function matakuliah()
    {
        return $this->hasMany(MataKuliah::class);
    }
}
