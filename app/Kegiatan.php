<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }
}
