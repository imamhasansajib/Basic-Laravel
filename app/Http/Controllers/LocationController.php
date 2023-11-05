<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class LocationController extends Controller
{
    public function getDistrictsByDivisionId($division_id){
        $districts = District::where('division_id', '=', $division_id)
                            ->get();

        return response()->json([
            'districts' => $districts
        ]);
    }
}
