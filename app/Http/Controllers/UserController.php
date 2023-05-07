<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView()
    {
        return view('Admin.user_managment');
    }

    public function UserStore(Request $request)
    {
        
    }//end methode
    
}
