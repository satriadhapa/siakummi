<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = "program_studi";
    protected $primaryKey = "NamaProdi";
    protected $fillable = [
        "NamaProdi","NIM","MataKuliah"
    ];
}
