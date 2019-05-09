<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class constancyController extends Model
{
    public function index(){

    	return view('constancyForm');
    }
    public function store(Request $request){

    }
}
