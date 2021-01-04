<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(["auth", "verified", "password.confirm"]);
    }
    
    /**
     * Show the authenticated users account.
     *
     * @return void
     */
    public function show() 
    {
        return view("accounts.show");
    }
}
