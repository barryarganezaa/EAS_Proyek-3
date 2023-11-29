<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'Barang'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $primaryKey = 'KodeBarang';

    protected $fillable = [
        'KodeBarang',
        'NamaBarang',
        'HargaSatuan',
        'Stok',
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat menentukan relasinya di sini.
    // Misalnya, jika ada relasi dengan tabel BarangNota, Anda dapat menambahkan relasi seperti berikut:
    
    // public function barangNota()
    // {
    //     return $this->hasMany(BarangNota::class, 'KodeBarang', 'KodeBarang');
    // }
}
