<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoomsRepository;
use App\Repositories\MoviesRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoomsRepository $roomsRepository, MoviesRepository $moviesRepository)
    {
        $rooms = $roomsRepository->getAllRooms();
        $movies = $moviesRepository->getAllMovies();
        return view('home', ['rooms' => $rooms, 'movies' => $movies]);
    }
}
