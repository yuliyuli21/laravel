<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id = 1, $name = 'John')
    {
    	return 'id:'.$id.',name:'.$name;
    }

    
}
