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

    	$departments = Department::all();
        return view("student.offeredcourselist", compact('departments'));
    }
}
