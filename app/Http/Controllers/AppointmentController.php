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
            $lead = DB::table('leads')
                ->select('leads.*', 'leads.id as leadid', 'clients.*')
                ->join('clients', 'clients.id', '=', 'leads.client_id')
                ->paginate(3);
            return view('appointments.index', compact('lead'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function get_lead_details(Request $request)
    {
        $id=$request->id;
       try {
            $lead = DB::table('leads')
                ->select('leads.*', 'leads.id as leadid', 'clients.*')
                ->join('clients', 'clients.id', '=', 'leads.client_id')
                ->where('leads.id',$id)
                ->get();
           echo json_encode($lead);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
