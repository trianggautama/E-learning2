<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use Uuid;

    protected $fillable = [
        'tahun',
    ];

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
