<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    //

    public function index(){
        // $sumdonate = DB::table('users')->sum('total_donation'); , compact('sumdonate')
        // dd($sumdonate);
        return view('homepage');
    }
}
