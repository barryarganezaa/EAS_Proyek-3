<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    protected $table = 'Tenan'; // Sesuaikan dengan nama tabel yang Anda gunakan

    protected $primaryKey = 'KodeTenan';

    protected $fillable = [
        'KodeTenan',
        'NamaTenan',
        'HP',
    ];

    // Jika Anda memiliki relasi dengan tabel lain, Anda dapat menentukan relasinya di sini.
    // Misalnya, jika ada relasi dengan tabel Nota, Anda dapat menambahkan relasi seperti berikut:
    
    // public function nota()
    // {
    //     return $this->hasMany(Nota::class, 'KodeTenan', 'KodeTenan');
    // }
}
