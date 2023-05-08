<?php

namespace App\Http\Controllers;

use App\Models\Grand;
use Illuminate\Http\Request;

class GrandController extends Controller
{
    public function index(){
        $dashboard = Grand::get();
        return view('brand.index',compact('dashboard'));
    }
}
