<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $name="Mahfuzur Rahman";
        return \view('front.home.home-content');
    }
    public function  support(){
        $name="Mahfuzur Rahman";
        return \view('front.support.support-content');
    }
}
