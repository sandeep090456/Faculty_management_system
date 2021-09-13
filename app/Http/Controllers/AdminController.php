<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listAllUsers(){
        $data = User::all();
        return view('admin-list',['data' => $data]);
    }
}
