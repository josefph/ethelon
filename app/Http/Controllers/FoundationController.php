<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitiyskill;
use App\Activity;
use App\Foundation;
class FoundationController extends Controller
{
    //

    public function getFoundationActivities(Request $request){
        $activities = Activity::where('foundation_id',$request->input('foundation_id'))->get();

        return response()->json($activities);
    }

    public function getallfoundations(){
		$foundations = Foundation::all();

		 return response()->json($foundations);
    }
}
