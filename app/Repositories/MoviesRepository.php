<?php
namespace App\Repositories;

use App\Contracts\MovieInterface;
use App\User;
use App\Models\Room;
use App\Models\Movie;
use Auth;

class MoviesRepository implements MovieInterface
{

	public function __construct(Movie $movie)
	{
		$this->movie = $movie;
	}

	public function getAllMovies()
	{
		return $this->movie->get();
	}
}