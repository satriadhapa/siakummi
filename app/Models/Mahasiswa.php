<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "NIM";
    protected $fillable = [
        "no","NIM","NamaLengkap","MataKuliah","NamaProdi","JumlahMatkul"
    ];
}
