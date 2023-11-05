<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employeeCreate(){
        $divisions = Division::all();
        return view('employee', compact('divisions'));
    }

    public function storeEmployee(Request $request){
        $obj = new Employee();
        $obj->name = $request->name;
        $obj->division_id = $request->division;
        $obj->district_id = $request->district;
        if($obj->save()){
            return response()->json([
                'employee' => $obj
            ]);
        }
    }
}
