<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homePage()
    {
        $site = [
            'title' => 'DASHBOARD MENU'
        ];
        return view('page.dashboard.dashboard', compact('site'));
    }
}
