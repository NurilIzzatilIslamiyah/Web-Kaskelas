<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_siswa',
        'tgl_bayar',
        'jumlah_bayar',
    ];

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }
}
