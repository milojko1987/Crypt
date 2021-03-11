<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $Students = Student::get();

        return view('Students', compact('Students'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'last_name' =>'required',
            'direction' =>'required|numeric|min:10',
            'year' =>'required|numeric|min:1',
            'presence' =>'required|numeric|min:1',
            'colloquium1' =>'required|numeric|min:1',
            'colloquium2' =>'required|numeric|min:1',
            'exam' =>'required|numeric|min:1'
        ]);

        $Student = new Student;
        $Student->name = $request['name'];
        $Student->last_name = $request['last_name'];
        $Student->direction = $request['direction'];
        $Student->year = $request['year'];
        $Student->presence = $request['presence'];
        $Student->colloquium1 = $request['colloquium1'];
        $Student->colloquium2 = $request['colloquium1'];
        $Student->exam = $request['exam'];
        $Student->save();

        return redirect('students');
    }


}
