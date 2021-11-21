<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $guarded=[];
    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }
}
