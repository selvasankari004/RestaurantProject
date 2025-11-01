<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller{
public function add_food()
{ 
    return view('admin.add_food');
    
}
}