<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cosplay;

class CosplayController extends Controller

{
    public function index() {
    $cosplays = Cosplay::all();
    return view('index', compact('cosplays'));
    }
}
