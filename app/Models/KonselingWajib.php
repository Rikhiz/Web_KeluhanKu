<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonselingWajib extends Model
{
    use HasFactory;

    protected $table = 'tb_konseling_wajib';

    protected $fillable = [
        'kw_name',
        'kw_jadwal',
        'kw_ruangan',
    ];

    protected $dates = [
        'kw_jadwal',
    ];
}
