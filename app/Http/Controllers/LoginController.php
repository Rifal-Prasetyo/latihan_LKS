<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function loginPage()
    {
        $site = [
            'title' => 'APALAH'
        ];
        return view('page.login', ['site' => $site]);
    }

    public function loginAction()
    {
    }
}
