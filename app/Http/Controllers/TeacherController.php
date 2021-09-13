<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listAllStudents(){
        $data = User::where('user_role', 'student')->get();
        return view('teacher-list',['data' => $data]);
    }
}
