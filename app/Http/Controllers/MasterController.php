<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MasterController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getText() {
        return view('text');
    }

    public function getUser() {
        return view('user');
    }
}
