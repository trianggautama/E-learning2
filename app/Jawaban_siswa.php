<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban_siswa extends Model
{
    use Uuid;

    public function tes_siswa()
    {
        return $this->belongsTo(Tes_siswa::class);
    }

}
