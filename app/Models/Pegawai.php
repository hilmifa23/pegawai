<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pegawai',
        'jenis_kelamin',
        'tanggal_lahir',
        'id_departemens',
        'email',
        'nomor_hp',
        'alamat',
    ];

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemens');
    }
}
