<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Clients;
use App\Models\Lead;
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
        $totalcustomers = Clients::count();
        $totalleads = Lead::count();
        $pendingleads = Lead::where('status', 0)->count();
        $activeleads = Lead::where('status', 1)->count();
        $zalaryleads = Lead::where('status', 3)->count();

        return view('home.dashboard', compact('totalcustomers', 'totalleads', 'pendingleads', 'activeleads', 'zalaryleads'));
    }
    public function dashboard()
    {

        $totalcustomers = Clients::count();
        $totalleads = Lead::count();
        $pendingleads = Lead::where('status', 0)->count();
        $activeleads = Lead::where('status', 1)->count();
        $zalaryleads = Lead::where('status', 3)->count();

        return view('home.dashboard', compact('totalcustomers', 'totalleads', 'pendingleads', 'activeleads', 'zalaryleads'));
    }
}
