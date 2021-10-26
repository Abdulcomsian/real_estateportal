<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        try {
            $leads = User::where('role', 'leads')->get();
            return view('leads.leads-view', ['leads' => $leads]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }

    }
    public function create()
    {
        return view('leads.create');
    }
    public function show($id)
    {
        //
    }

}
