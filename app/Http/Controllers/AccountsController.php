<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth", "verified", "password.confirm"]);
    }

    public function show() 
    {
        return view("accounts.show");
    }
}
