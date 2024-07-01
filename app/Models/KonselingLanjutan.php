<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonselingLanjutan extends Model
{
    use HasFactory;

    protected $table = 'konseling_lanjutan';

    protected $fillable = [
        'kl_name',
        'kl_jadwal',
        'siswa_fk',
        'gurubk_fk',
        'kl_ruangan',
        'kl_kategori',
    ];

    protected $dates = [
        'kl_jadwal',
    ];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_fk');
    }

    public function guruBK()
    {
        return $this->belongsTo(User::class, 'gurubk_fk');
    }
}
