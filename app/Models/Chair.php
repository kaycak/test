<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    protected $table = 'chairs';

    protected $fillable = ['number'];

    public function active_chairs()
    {
    	return $this->hasMany('\\App\\Models\\ChairActivity')->where('active', true);
    }
}
