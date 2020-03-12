<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function salesdaily()
    {
        return view('admin.salesdaily');
    }
    public function salesweekly()
    {
        return view('admin.salesweekly');
    }
}
