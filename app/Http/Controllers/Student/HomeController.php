<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Department;
use App\Course;

class HomeController extends Controller
{
    public function index()
    {	
        $flag = 0;
    	$departments = Department::all();
        return view("student.offeredcourselist", compact('departments','flag'));
    }

    public function readdata(Request $request)
    {	
        $this->validate($request,[
            'year' => 'required',
            'term' => 'required',
            'department_id' => 'required',
        ]);

        $flag = 1;
        $departments = Department::all();
        $courses = Course::latest()
        ->where('year',$request->year)
        ->orWhere('year',$request->term)
        ->where('department_id',$request->department_id)
        ->get();
        return view("student.offeredcourselist", compact('departments','flag','courses'));
    }


}
