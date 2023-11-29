<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'Kasir'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $primaryKey = 'KodeKasir';

    protected $fillable = [
        'KodeKasir',
        'Nama',
        'HP',
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat menentukan relasinya di sini.
    // Misalnya, jika ada relasi dengan tabel Nota, Anda dapat menambahkan relasi seperti berikut:
    
    // public function nota()
    // {
    //     return $this->hasMany(Nota::class, 'KodeKasir', 'KodeKasir');
    // }
}
