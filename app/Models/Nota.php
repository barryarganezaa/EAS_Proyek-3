<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'Nota'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $primaryKey = 'KodeNota';

    protected $fillable = [
        'KodeNota',
        'KodeTenan',
        'KodeKasir',
        'TglNota',
        'JamNota',
        'JumlahBelanja',
        'Diskon',
        'Total',
    ];

    protected $casts = [
        'TglNota' => 'date', // Cast kolom TglNota ke tipe data date
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat menentukan relasinya di sini.
    // Misalnya, jika ada relasi dengan tabel BarangNota, Anda dapat menambahkan relasi seperti berikut:
    
    // public function barangNota()
    // {
    //     return $this->hasMany(BarangNota::class, 'KodeNota', 'KodeNota');
    // }
}
