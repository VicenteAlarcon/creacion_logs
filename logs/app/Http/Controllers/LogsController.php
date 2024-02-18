<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogsController extends Controller
{
   public function index()
   {
    $logs = Log::all();
    return view('logs.log', compact('logs'));
   }
}
