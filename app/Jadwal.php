<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }
}
