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

    public function index()
    {
        try {
            $lead = Lead::leftJoin('clients', 'clients.id', '=', 'leads.client_id')
                ->select('leads.*', 'leads.id as leadid', 'leads.cap_rate as leadcap_rate', 'leads.price_per_door as leadpricedoor', 'clients.*')

                ->paginate(2);
                dd($lead);
            return view('appointments.index', compact('lead'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function get_lead_details(Request $request)
    {
        $id = $request->id;
        try {
            $lead = Lead::leftJoin('clients', 'clients.id', '=', 'leads.client_id')
                ->select('leads.*', 'leads.id as leadid', 'leads.cap_rate as leadcap_rate', 'leads.price_per_door as leadpricedoor', 'clients.*')
                ->where('leads.id', $id)
                ->get();
            echo json_encode($lead);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
