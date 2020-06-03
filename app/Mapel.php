<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use Uuid;

    protected $fillable = [
        'mapel', 'deskripsi',
    ];

    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class);
    }

    public function tes()
    {
        return $this->hasMany(Tes::class);
    }

}
