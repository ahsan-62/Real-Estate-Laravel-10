<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('Backend.Admin.admin_dashboard');
    }
}
