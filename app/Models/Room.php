<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['name'];

    public function movies()
    {
    	return $this->belongsToMany('\\App\\Models\\Movie', 'rooms_movies', 'room_id', 'movie_id');
    }

    public function chairs()
    {
    	return $this->belongsToMany('\\App\\Models\\Chair', 'rooms_chairs', 'room_id', 'chair_id');
    }
}
