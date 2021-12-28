<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lead;
use App\Models\Clients;
use App\Models\Brokers;
use Illuminate\Http\Request;
use DB;
use App\Exports\LeadExport;
use Maatwebsite\Excel\Facades\Excel;


use Auth;

class LeadController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {
        try {
            $leads = Lead::get();
            $brokers = Brokers::get();
            $title = "All Deals";
            return view('leads.leads-view', ['leads' => $leads, 'title' => $title, 'brokers' => $brokers]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //crate form
    public function create()
    {
        try {
            $brokers = Brokers::get();
            return view('leads.create', compact('brokers'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //store data
    public function store(Request $request)
    {
        $request->validate([
            'address' => ['required'],
            'markete_location' => ['required'],
            'ask_price' => ['required'],
            'price_per_door' => ['required'],
            // 'gross_revenue' => ['required', 'integer'],
            'noi' => ['required'],
            'cap_rate' => 'required|numeric|between:0,99.99',
        ]);
        try {
            $input = $request->except('_token', 'image');
            $input['user_id'] = Auth::user()->id;
            //documents will uploaded here
            if ($file = $request->file('om_file')) {
                $name = $this->upload_file($file);
                $input['om_file'] = $name;
            }
            if ($file = $request->file('rent_roll_file')) {
                $name = $this->upload_file($file);
                $input['rent_roll_file'] = $name;
            }
            if ($file = $request->file('p_l_file')) {
                $name = $this->upload_file($file);
                $input['p_l_file'] = $name;
            }
            if ($file = $request->file('t12_file')) {
                $name = $this->upload_file($file);
                $input['t12_file'] = $name;
            }
            if ($file = $request->file('t3_file')) {
                $name = $this->upload_file($file);
                $input['t3_file'] = $name;
            }
            if ($file = $request->file('covid_file')) {
                $name = $this->upload_file($file);
                $input['covid_file'] = $name;
            }
            if ($file = $request->file('capx_file')) {
                $name = $this->upload_file($file);
                $input['capx_file'] = $name;
            }
            if ($file = $request->file('coster_report')) {
                $name = $this->upload_file($file);
                $input['coster_report'] = $name;
            }
            //end of document
            $res = Lead::create($input);
            if ($res) {
                toastr()->success('Lead Created Successfully!!');
                return redirect('/leads');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //show data
    public function show($id)
    {
        try {
            $lead = Lead::leftJoin('clients', 'clients.id', '=', 'leads.client_id')
                ->select('leads.*', 'leads.id as leadid', 'leads.cap_rate as leadcap_rate', 'leads.price_per_door as leadpricedoor', 'clients.*')
                ->where('leads.id', $id)
                ->paginate(20);
            return view('appointments.index', compact('lead'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //edit leads
    public function edit($id)
    {
        try {
            $brokers = Brokers::get();
            $lead = Lead::find($id);
            return view('leads.edit-leads', compact('lead', 'brokers'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //update lead data
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => ['required'],
            'markete_location' => ['required'],
            'ask_price' => ['required', 'integer'],
            'price_per_door' => ['required', 'integer'],
            'gross_revenue' => ['required', 'integer'],
            'noi' => ['required'],
            'cap_rate' => ['required', 'integer'],
        ]);
        try {
            $leaddata = Lead::find($id);
            $input = $request->except('_token', '_method');
            $input['user_id'] = Auth::user()->id;
            //documents will uploaded here
            if ($file = $request->file('om_file')) {
                removefile($leaddata, 'om_file');
                $name = $this->upload_file($file);
                $input['om_file'] = $name;
            }
            if ($file = $request->file('rent_roll_file')) {
                removefile($leaddata, 'rent_roll_file');
                $name = $this->upload_file($file);
                $input['rent_roll_file'] = $name;
            }
            if ($file = $request->file('p_l_file')) {
                removefile($leaddata, 'p_l_file');
                $name = $this->upload_file($file);
                $input['p_l_file'] = $name;
            }
            if ($file = $request->file('t12_file')) {
                removefile($leaddata, 't12_file');
                $name = $this->upload_file($file);
                $input['t12_file'] = $name;
            }
            if ($file = $request->file('t3_file')) {
                removefile($leaddata, 't3_file');
                $name = $this->upload_file($file);
                $input['t3_file'] = $name;
            }
            if ($file = $request->file('covid_file')) {
                removefile($leaddata, 'covid_file');
                $name = $this->upload_file($file);
                $input['covid_file'] = $name;
            }
            if ($file = $request->file('capx_file')) {
                removefile($leaddata, 'capx_file');
                $name = $this->upload_file($file);
                $input['capx_file'] = $name;
            }
            //end of document
            $res = Lead::where('id', $id)->update($input);
            if ($res) {
                toastr()->success('Lead Updated Successfully!!');
                return redirect('/leads');
            }
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //delete lead
    public function destroy($id)
    {
        try {
            Lead::find($id)->delete();
            toastr()->success('Lead Deleted Successfully');
            return redirect('/leads');
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //upload file
    public function upload_file($file)
    {
        $path = 'leads-documents/';
        if (!file_exists(public_path() . '/' . $path)) {
            $path = 'leads-documents/';
            File::makeDirectory(public_path() . '/' . $path, 0777, true);
        }
        $name = time() . $file->getClientOriginalName();
        $file->move('leads-documents/', $name);
        return $name;
    }
    //clients all leads
    public function client_all_leads($id)
    {
        try {
            $leads = Lead::where('client_id', $id)->get();
            return view('leads.client-all-leads', ['leads' => $leads]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //broker all leads
    public function broker_all_leads($id)
    {
        try {
            $leads = Lead::where('broker_id', $id)->get();
            return view('leads.client-all-leads', ['leads' => $leads]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //active leads
    public function active_leads()
    {
        try {
            $leads = Lead::where('status', 1)->get();
            $brokers = Brokers::get();
            $title = "Active Deals";
            return view('leads.leads-view', ['leads' => $leads, 'title' => $title, 'brokers' => $brokers]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //pending leads
    public function pending_leads()
    {
        try {
            $leads = Lead::where('status', 0)->get();
            $brokers = Brokers::get();
            $title = "Pending Deals";
            return view('leads.leads-view', ['leads' => $leads, 'title' => $title, 'brokers' => $brokers]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //undercontract leads
    public function under_contract()
    {
        try {
            $leads = Lead::where('status', 3)->get();
            $brokers = Brokers::get();
            $title = "Under Contract Deals";
            return view('leads.leads-view', ['leads' => $leads, 'title' => $title, 'brokers' => $brokers]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    //export to excel
    public function export_excel()
    {
        return  Excel::download(new LeadExport, 'lead.xlsx');
    }

    public function lead_filter_broker(Request $request)
    {
        $status = $request->status;
        if ($request->status == "0") {
            $status = '0';
            $request->status = "6";
        }
        try {
            //filter by defferent options
            $leads = Lead::when($request->broker, function ($query) use ($request) {
                return $query->where('broker_id', $request->broker);
            })->when($request->ask_price, function ($query) use ($request) {
                return $query->where('ask_price', $request->ask_price);
            })->when($request->status, function ($query) use ($request, $status) {
                return $query->where('status', $status);
            })->when($request->markete_location, function ($query) use ($request) {
                return $query->where('markete_location', 'LIKE', '%' . $request->markete_location . '%');
            })->when($request->cap_rate, function ($query) use ($request) {
                return $query->where('cap_rate', $request->cap_rate);
            })->get();
            $brokers = Brokers::get();
            $title = "All Deals";
            return view('leads.leads-view', ['leads' => $leads, 'title' => $title, 'brokers' => $brokers]);
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}
