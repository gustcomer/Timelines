<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $guarded = [];

    public function pontos ()
    {
    	return $this->hasMany(Ponto::class);
    }
}
