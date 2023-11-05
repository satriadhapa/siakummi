<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "NIM";
    protected $fillable = [
        "NIM","NamaLengkap","MataKuliah","NamaProdi"
    ];
    public function NamaProdi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }
}
