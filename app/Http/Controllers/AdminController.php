<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller{
public function handle($request,$next)
{
    if (auth()->check() && auth()->user()->is_admin) {
        return $next($request);
    }
    return redirect('/home')->with('error', 'Access denied');
}
}