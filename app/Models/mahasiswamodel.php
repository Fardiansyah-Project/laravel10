<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswamodel extends Model
{
    use HasFactory;
    protected $table = "data_mahasiswa";
    protected $filtable =[
        'name',
        'nim',
        'address'
    ];
}
