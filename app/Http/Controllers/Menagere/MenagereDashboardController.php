<?php

namespace App\Http\Controllers\Menagere;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenagereDashboardController extends Controller
{
    public function index()
    {
        return view('menagere.menagere-dashboard');
    }
}
