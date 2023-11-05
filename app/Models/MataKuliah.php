<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = "mata_kuliah";
    protected $primaryKey = "MataKuliah";
    protected $fillable = [
        "no","MataKuliah","NamaProdi","JumlahMahasiswa"
    ];
}
