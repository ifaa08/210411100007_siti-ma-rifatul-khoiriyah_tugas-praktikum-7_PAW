<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaa extends Model
{
    use HasFactory;
    protected $fillable = [
        'no',
        'nim',
        'nama',
        'email',
        'alamat'
    ];
}
