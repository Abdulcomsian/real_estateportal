<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        try {
            $lead = DB::table('leads')
                ->join('clients', 'clients.id', '=', 'leads.client_id')
                ->where('leads.id', $id)
                ->get();
            return view('appointments.index', compact('lead'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
