<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MoviesRepository;

class MoviesController extends Controller
{
    public function index(MoviesRepository $movieReposytory)
    {
    	$rooms = $movieReposytory->getAllRooms());
    }
}
