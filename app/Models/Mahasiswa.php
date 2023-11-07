<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id";
    protected $fillable = [
        "id","NIM","NamaLengkap","prodi_id" //"MataKuliah"
    ];
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

}
