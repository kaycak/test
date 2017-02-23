<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ChairRepository;

class ChairsController extends Controller
{
    public function saveChair(Request $request, ChairRepository $chairRepository)
    {
    	$chair_id = $request->input('chair_id');
    	if(null == $chair_activity = $chairRepository->blockChairById($chair_id)) {
    		return redirect()->back()->withSuccess('Chair has been successfully blocked');
    	}
    	return redirect()->back()->withWarning('Ops. Somethin went wrong. Please try later');
    }
}
