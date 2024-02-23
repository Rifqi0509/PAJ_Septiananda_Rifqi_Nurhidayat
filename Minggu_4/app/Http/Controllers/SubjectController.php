<?php

namespace App\Http\Controllers;
use Illuminate\Http\View\View;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function viewS_Student()
    {    
        return view('S_Student');
    }

    public function viewS_Teacher()
    {    
        return view('S_Teacher');
    }

    public function viewS_Admin()
    {    
        return view('S_Admin');
    }
} 
