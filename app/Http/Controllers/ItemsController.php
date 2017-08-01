<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    function jewelryTypes(){
    	return $this->belongsTo('App\JewelryType');
    }
}
