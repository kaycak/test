<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['name'];

    public function movies()
    {
    	return $this->belongsToMany('\\App\\Models\\Movie', 'rooms_movies', 'movie_id', 'room_id');
    }

    public function chairs()
    {
    	return $this->hasMany('\\App\\Models\\Chair');
    }

    public function active_chairs()
    {
    	return $this->hasMany('\\App\\Models\\ChairActivity')->where('active', true);
    }
}
