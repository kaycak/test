<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\ChairRequest;

use App\Repositories\RoomsRepository;

class RoomsController extends Controller
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

    public function create(RoomsRepository $roomsRepository)
    {
    	return view('admin.rooms.create');
    }

    public function store(RoomRequest $roomRequest, RoomsRepository $roomsRepository)
    {
    	if(null != $room = $roomsRepository->addRoom($roomRequest->all())) {
    		return redirect('/home')->withSuccess('Room has been successfully created');
    	}
    	return redirect()->back()->withWarning('Ops. Something wnet wrong. Please try later');
    }

    public function createMovie($id)
    {
    	return view('admin.rooms.create-movie', ['id' => $id]);
    }

    public function addMovie(MovieRequest $movieRequest, RoomsRepository $roomsRepository)
    {
    	if(null != $room = $roomsRepository->addMovie($movieRequest->all())) {
    		return redirect('/home')->withSuccess('Movie has been successfully created');
    	}
    	return redirect()->back()->withWarning('Ops. Something wnet wrong. Please try later');
    }

    public function createChair($id)
    {
    	return view('admin.rooms.create-chair', ['id' => $id]);
    }

    public function addChair(ChairRequest $chairRequest, RoomsRepository $roomsRepository)
    {
    	if(null != $chair = $roomsRepository->addChair($chairRequest->all())) {
    		return redirect('/home')->withSuccess('Movie has been successfully created');
    	}
    	return redirect()->back()->withWarning('Ops. Something wnet wrong. Please try later');
    }
}