<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.admin-dashboard');
    }


    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the currently authenticated user
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerates the CSRF token

        return redirect('/login'); // Redirect to the login page or any other page you prefer
    }

}
