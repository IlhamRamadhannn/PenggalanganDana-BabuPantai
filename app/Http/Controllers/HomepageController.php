<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    //

    public function index(){
        $sumdonate = DB::table('user')->sum('total_donation');
        // dd($sumdonate);
        return view('homepage', compact('sumdonate'));
    }
}
