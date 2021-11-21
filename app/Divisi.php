<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Divisi extends Model
{
    protected $guarded = [];

    public function anggotas(){
        return $this->hasMany(Anggota::class);
    }
}
