<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponto extends Model
{
    protected $guarded = [

	];

    public function timeline ()
    {
    	return $this->belongsTo(Timeline::class);
    }
}
