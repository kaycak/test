<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChairActivity extends Model
{
    protected $table = 'chairs_activites';

    protected $fillable = ['room_id', 'movie_id', 'chair_id', 'active'];

    public $timestamps = false;

    public function chairs()
    {
    	return $this->belongsTo('\\App\\Models\\Chair');
    }
}
