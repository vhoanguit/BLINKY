<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
}
