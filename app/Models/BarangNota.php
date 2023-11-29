<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    protected $table = 'BarangNota'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $fillable = [
        'KodeNota',
        'KodeBarang',
        'JumlahBarang',
        'HargaSatuan',
        'Jumlah',
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat menentukan relasinya di sini.
    // Misalnya, jika ada relasi dengan tabel Nota dan Barang, Anda dapat menambahkan relasi seperti berikut:
    
    // public function nota()
    // {
    //     return $this->belongsTo(Nota::class, 'KodeNota', 'id');
    // }

    // public function barang()
    // {
    //     return $this->belongsTo(Barang::class, 'KodeBarang', 'id');
    // }
}
