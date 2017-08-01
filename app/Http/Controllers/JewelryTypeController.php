<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelryType.php extends Controller
{
    function items(){
    	return $this->hasMany('App\Items');
    }
}
