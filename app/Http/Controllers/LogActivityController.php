<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogActivityController extends Controller
{
    public function index(){

        $logs = \LogActivity::logActivityLists();
        
        return view('logactivity.index', compact('logs'));
    }
}
