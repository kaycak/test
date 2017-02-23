<?php
namespace App\Repositories;

use App\Contracts\RoomInterface;
use App\User;
use App\Models\Room;
use App\Models\Chair;
use App\Models\Movie;
use Auth;

class RoomsRepository implements RoomInterface
{

	public function __construct(Room $room,Chair $chair, Movie $movie)
	{
		$this->room = $room;
		$this->chair = $chair;
		$this->movie = $movie;
	}

	public function getAllRooms()
	{
		return $this->room->with('movies')->get();
	}

	public function addRoom($params)
	{
		return $this->room->create($params);
	}

	public function addMovie($params)
	{
		$room_id = $params['room_id'];
		unset($params['room_id']);
		$movie = $this->movie->create($params);
		if($movie) {
			$this->room->find($room_id)->movies()->attach([$movie->id]);
			return $movie;
		}
		return null;
	}

	public function addChair($params)
	{
		$room_id = $params['room_id'];
		unset($params['room_id']);
		$chair = $this->chair->create($params);
		if($chair) {
			$this->room->find($room_id)->chairs()->attach([$chair->id]);
			return $chair;
		}
		return null;
	}
}