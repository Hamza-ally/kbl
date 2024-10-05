<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class GlobalController
{
    use HasRoles;

    public function segregate(){
        if(Auth::check() && Auth::user()->hasRole('admin'))
        return redirect()->route('admin.dashboard');

        if(Auth::check() && Auth::user()->hasRole('manager'))
        return redirect()->route('manager.dashboard');

        if(Auth::check() && Auth::user()->hasRole('user'))
        return redirect()->route('user.dashboard');
    }
}
