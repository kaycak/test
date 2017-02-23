<?php
namespace App\Repositories;

use App\Contracts\ChairInterface;
use App\User;
use App\Models\ChairActivity;
use App\Models\Chair;
use Auth;

class ChairRepository implements ChairInterface
{
	public function __construct(ChairActivity $chairActivity, Chair $chair)
	{
		$this->chairActivity = $chairActivity;
		$this->chair = $chair;
	}

	public function blockChairById($id)
	{
		$chair_activity = $this->chairActivity->where('chair_id', $id)->first();
		$chair_activity->update(['active' => false]);
		return $chair_activity;
	}
}