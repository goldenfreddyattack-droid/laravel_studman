<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddStud extends Controller
{
    public function addstud(){
        return view ('student.addstud');
    }
}
