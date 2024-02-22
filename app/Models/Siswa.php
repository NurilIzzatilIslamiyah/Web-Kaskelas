<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table=('siswa');

     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'kelas',
    ];
}
