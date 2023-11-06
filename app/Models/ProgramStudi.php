<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = "programstudi";
    protected $primaryKey = "id";
    protected $fillable = [
       "id","prodi"
    ];
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}