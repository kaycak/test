<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoomsRepository;

class RoomsController extends Controller
{
    public function index(RoomsRepository $roomsRepository)
    {
    	$rooms = $roomsRepository->getAllRooms();
    	return view('rooms.index', ['rooms' => $rooms]);
    }
}
