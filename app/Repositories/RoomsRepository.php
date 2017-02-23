<?php
namespace App\Repositories;

use App\Contracts\RoomInterface;
use App\User;
use App\Models\Room;
use Auth;

class RoomsRepository implements RoomInterface
{

	public function __construct(Room $room)
	{
		$this->room = $room;
	}

	public function getAllRooms()
	{
		return $this->room->with('movies')->get();
	}

	// public function getActiveChairs($rooms)
	// {

	// 	$active_chair_ids = $rooms[0]->active_chairs->pluck('chair_id')->toArray()
	// }

}