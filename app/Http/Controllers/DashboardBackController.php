<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardBackController extends Controller
{
    public function user(){
        return view('user.user');

    }
}
