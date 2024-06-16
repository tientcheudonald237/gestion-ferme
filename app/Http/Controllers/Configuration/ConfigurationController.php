<?php

namespace App\Http\Controllers\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\Lodge;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    function index(){
        $buildings = Building::get()->count();
        $lodges = Lodge::get()->count();
        return view('configuration.index',compact('buildings','lodges'));
    }
}
