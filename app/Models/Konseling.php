<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    use HasFactory;

    protected $table = 'tb_konseling';

    protected $fillable = [
        'siswa_fk',
        'gurubk_fk',
        'konseling_wajib_fk',
        'status',
        // Add more fillable attributes if needed
    ];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_fk');
    }

    public function guruBK()
    {
        return $this->belongsTo(User::class, 'gurubk_fk');
    }

    public function konselingWajib()
    {
        return $this->belongsTo(KonselingWajib::class, 'konseling_wajib_fk');
    }
}
