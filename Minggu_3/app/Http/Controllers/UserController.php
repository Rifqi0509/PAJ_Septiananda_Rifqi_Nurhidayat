<?php

namespace App\Http\Controllers;
use Illuminate\Http\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewU_Student()
    {    
        return view('U_Student');
    }

    public function viewU_Teacher()
    {    
        return view('U_Teacher');
    }

    public function viewU_Admin()
    {    
        return view('U_Admin');
    }
} 
