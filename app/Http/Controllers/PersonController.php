<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PersonController extends Controller
{
    public function create()
    {
        return view('person.create');
    }

    public function store(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $birth_date = $req->birth_date;
        $salary = $req->salary;

        DB::table('persons')->insert([
            'name' => $name,
            'email' => $email,
            'birth_date' => $birth_date,
            'salary' => $salary
        ]);
        return redirect('persons');
    }

    public function all()
    {
        $data = DB::table('persons')->get(); // returns an array

        // $persons = DB::table('persons')->select('name')->get();
        // $name = 'Arifur Rahman';
        // foreach($persons as $p){
        //     if($name == $p->name){
        //         echo $name.' already in a group';
        //     }
        // }

        return view('person.all', ['persons' => $data]);
    }

    public function edit($id){
        $person = DB::table('persons')->where('id', '=', $id)->first();
        return view('person.edit', ['person'=>$person]);
    }

    public function update(Request $req, $pid)
    {
        $name = $req->name;
        $email = $req->email;
        $birth_date = $req->birth_date;
        $salary = $req->salary;

        DB::table('persons')->where('id', '=', $pid)->update([
            'name' => $name,
            'email' => $email,
            'birth_date' => $birth_date,
            'salary' => $salary
        ]);
        return redirect('edit-person/'.$pid);
    }

    public function delete($id){
        $deleted = DB::table('persons')
                    ->where('id', '=', $id)
                    ->delete();
        return redirect('persons');
    }
}
