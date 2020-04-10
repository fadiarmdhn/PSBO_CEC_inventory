<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function addItems()
    {
        return view('admin.addItems');
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function salesdaily()
    {
        return view('admin.salesdaily');
    }
    public function salesweekly()
    {
        return view('admin.salesweekly');
    }

    public function cashbook()
    {
        return view('admin.cashbook');
    }

    public function solditems()
    {
        return view('admin.solditems');
    }
}
