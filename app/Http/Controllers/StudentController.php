<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listAllTeachers(){
        $data = User::where('user_role', 'teacher')->get();
        return view('student-list',['data' => $data]);
    }
}
