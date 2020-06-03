<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use Uuid;

    protected $fillable = [
        'periode_id', 'mapel', 'deskripsi',
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class);
    }

    public function tes()
    {
        return $this->hasMany(Tes::class);
    }

}
