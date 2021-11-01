<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalcustomers = User::where('role', 'admin')->count();
        return view('home.dashboard', compact('totalcustomers'));
    }
    public function dashboard()
    {
        $totalcustomers = User::where('role', 'admin')->count();
        return view('home.dashboard', compact('totalcustomers'));
    }
}
