<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legume;
use Illuminate\Support\Facades\DB;

class LegumeController extends Controller
{
    public function index(){
        $legume = DB::table("legumes")
        ->orderBy("nom", "asc")
        ->get();
        return view("pages.legume", compact("legume"));
    }
}

