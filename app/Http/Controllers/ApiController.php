<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function create(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();

        return response()->json([
            'message'=>'Student Created Succefully'
        ]);
    }
}
