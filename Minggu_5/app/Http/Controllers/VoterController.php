<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Voter;

class VoterController extends Controller
{
    public function viewVoter()
    {
        // return view('Voters');
        // $voter=DB::table('voters')->get();
        $voter=Voter::all();
        return view('voters',compact('voter'));
    } 
}